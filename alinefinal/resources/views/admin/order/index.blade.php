@extends('admin.layoutadmin.master')

@section('title', 'Order History')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Order History</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Order Number</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Quantity</th>
               
                <th>Total Price</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Orderhistory as $index => $orderhistory)
            <a href="{{ route('show.order',$orderhistory['order']->id) }}">
               
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{  $orderhistory['order']->order_number }}</td>
                        <td> @foreach ($orderhistory['details'] as $detail)
                            <div style="height: 80px ;text-align: center ;line-height: 80px;">

                                {{ $detail['product']->name }}
                            </div>
                            
                           @endforeach
                        </td>
                        <td> @foreach ($orderhistory['details'] as $detail)
                       
                            <div > <img src="{{ asset('storage/' . $detail['product']->image) }}" 
                            alt="{{ $detail['product']->name }}" 
                            style="width: 100px; height: auto;">
                        </div>
                           @endforeach
                           
                           
                        </td>
                        <td>@foreach ($orderhistory['details'] as $detail)
                            <div style="height: 80px ;text-align: center ;line-height: 80px;">
                        {{  $detail['detail']->quantity }}
                       </div>
                           @endforeach
                          </td>
                       
                        <td>  
                            <div style="height: 80px ;text-align: center ;line-height: 80px;">{{  $orderhistory['order']->total_amount }}</div>
                        </td>

                        <td>  
                            <div style="height: 80px ;text-align: center ;line-height: 80px;">{{  $orderhistory['order']->status }}</div>
                         </td>
                         
                        <td>  
                           <a class="btn btn-success" href="{{ route('admin.orders.show',$orderhistory['order']->id) }}">Edit</a>
                         </td>
                    </tr>
                </a>   
            @endforeach
        </tbody>
    </table>
</div>
@endsection
