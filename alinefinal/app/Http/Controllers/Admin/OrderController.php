<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;

class OrderController extends Controller
{
    public function index() {

      
       
        $Order = Order::all();
        $Order_detail = Order_detail::all(); // Lấy tất cả các chi tiết đơn hàng
    
        $Orderhistory = []; // Khởi tạo mảng rỗng để lưu lịch sử đơn hàng
    
        foreach ($Order as $order) { 
            // Lấy các chi tiết đơn hàng liên quan đến đơn hàng hiện tại
            $Order_details = $Order_detail->where('order_id', $order->id);
    
            // Khởi tạo mảng rỗng để lưu chi tiết của đơn hàng
            $orderDetailsArray = [];
    
            foreach ($Order_details as $detail) {
                // Lấy sản phẩm tương ứng với chi tiết đơn hàng
                $product = Product::find($detail->product_id);
    
                // Thêm chi tiết đơn hàng và sản phẩm vào mảng
                $orderDetailsArray[] = [
                    'detail' => $detail,
                    'product' => $product
                ];
            }
    
            // Lưu đơn hàng và chi tiết vào mảng Orderhistory
            $Orderhistory[] = [
                'order' => $order,
                'details' => $orderDetailsArray
            ];
        }
        echo "<script>console.log(" . json_encode($Orderhistory) . ");</script>";
        // Trả về Orderhistory hoặc view với dữ liệu
        return view('admin.order.index', ['Orderhistory' => $Orderhistory]);
    }
  
public function show($id)
{


    // Fetch the specific order for the logged-in user
    $order = Order::where('id', $id)->first();
        
    $Orderhistory = [];
    
   
        // Fetch the order details related to the current order
        $Order_details = Order_detail::where('order_id', $order->id)->get();
    
        // Initialize an array to store the details of the current order
        $orderDetailsArray = [];
    
        foreach ($Order_details as $detail) {
            // Fetch the corresponding product for the order detail
            $product = Product::find($detail->product_id);
    
            // Add the order detail and product to the array
            $orderDetailsArray[] = [
                'detail' => $detail,
                'product' => $product
            ];
        }
    
        // Save the order and its details into the Orderhistory array
        $Orderhistory[] = [
            'order' => $order,
            'details' => $orderDetailsArray
        ];
        // echo "<script>console.log(" . json_encode($Orderhistory) . ");</script>";
    
    // Return the view with the order history data
    return view('admin.order.show', ['Orderhistory' => $Orderhistory[0]]);
}
public function update(Request $request, $id)
{
    // Lấy thông tin đơn hàng
    $order = Order::findOrFail($id);

    // Lấy các chi tiết đơn hàng liên quan
    $orderDetails = $order->orderDetails;

    // Tính tổng số tiền từ chi tiết đơn hàng
    $total_amount = $orderDetails->sum(function ($detail) {
        return $detail->quantity * $detail->price;
    });

    // Validate dữ liệu đầu vào
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'shipping_address' => 'required|string',
        'payment_method' => 'required|string',
        'status' => 'required|in:pending,completed,canceled',
    ]);

    // Cập nhật thông tin đơn hàng
    $order->update([
        'order_number' => $order->order_number, // Giữ nguyên số đơn hàng
        'total_amount' => $total_amount,       // Tổng số tiền đã tính
        'name' => $validatedData['name'],
        'phone' => $validatedData['phone'],
        'email' => $validatedData['email'],
        'shipping_address' => $validatedData['shipping_address'],
        'payment_method' => $validatedData['payment_method'],
      
    ]);
    $order->status = $validatedData['status'];
    $order->save();
    
    
    // Chuyển hướng sau khi cập nhật thành công
    return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
}

}
