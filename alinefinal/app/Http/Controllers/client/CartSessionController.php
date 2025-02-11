<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartSessionController extends Controller
{ 

    // view
    public function viewCart()
{

        // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới
      
    $cart = session()->get('cart');
    $total=0; 
 
    return view('client.shoppingcart', compact('cart','total'));
}

// add cart session 
    public function addToCart($id)
{
    // Giả sử bạn có một model Product để lấy thông tin sản phẩm
    $product = Product::find($id);

    // Kiểm tra giỏ hàng đã có trong session chưa
    $cart = session()->get('cart', []);

    // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới
        $cart[$id] = [
            "id"=> $product->id,
            "name" => $product->name,
            "price" =>$product->price,
            "image" => $product->image,
            "quantity" => 1,
            "total"=>$product->price,
        ];
    }
    // Cập nhật giỏ hàng trong session
    session()->put('cart', $cart);

    // // // Tính tổng giá giỏ hàng
    // $total = 0;
    // foreach ($cart as $item) {
    //     $total = $total+$item['total'] ;
    // }
    // $cart['total'] = $total;
    // session()->put('cart', $cart);
    // session()->forget('cart');
    return redirect(route('index'))->with('success', 'Product added to cart successfully!');

    // return redirect()->back()->with('success', 'Product added to cart successfully!');
}



public function updateCart(Request $request, $id)
{
    $cart = session()->get('cart');

    if (isset($cart[$id])) {
        $quantity =  $request->input('quantity'); // Chuyển đổi thành số nguyên

        if ($quantity <= 0) {
            $this->removeFromCart($id); // Đảm bảo phương thức này tồn tại
        } else {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }
        $total=$quantity*$cart[$id]['price'];
        $cart[$id]['total']= $total;
        session()->put('cart', $cart);
    }
// Lấy giỏ hàng từ session
// $cart = session()->get('cart');

// Nếu giỏ hàng tồn tại
// if ($cart) {
//     $total = 0;

//     // Duyệt qua tất cả các sản phẩm trong giỏ hàng
//     foreach ($cart as $id => $product) {
//         $total += $product['price'] * $product['quantity']; // Tính tổng giá
//     }

//     // Cập nhật giá tổng trong session
//     $cart['total'] = $total;
//     session()->put('cart', $cart);
// }
    return redirect()->back()->with('success', 'Cart updated successfully!');
}



public function removeFromCart($id)
{
    $cart = session()->get('cart');

    if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Product removed from cart successfully!');
}

public function viewcheckout()
{

        // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới
      
    $cart = session()->get('cart');
    $total=0; 
 
    return view('client.checkout', compact('cart','total'));
}


}
