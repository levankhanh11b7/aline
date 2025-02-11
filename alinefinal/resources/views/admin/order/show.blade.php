@extends('admin.layoutadmin.master')  
@section('content') 
<div class="container my-5">     
    <h1 class="mb-4">Order Details</h1> 

    <!-- Order Information -->
    <div class="card mb-4">         
        <div class="card-header">             
            <h3 class="mb-0">Order Information</h3>         
        </div>         
        <form action="{{ route('admin.orders.update', $Orderhistory['order']->id) }}" method="POST">
            @csrf
            @method('PUT')              
            <div class="card-body">             
                <div class="row">                 
                    <!-- Left Column -->
                    <div class="col-md-6">                     
                        <div class="mb-3">                         
                            <label for="order_number"><strong>Order Number:</strong></label>                         
                            <input type="text" id="order_number" name="order_number" class="form-control" value="{{ $Orderhistory['order']->order_number }}" readonly>                     
                        </div>                     
                        <div class="mb-3">                         
                            <label for="total_amount"><strong>Total Amount:</strong></label>                         
                            <input type="text" id="total_amount" name="total_amount" class="form-control" value="{{ $Orderhistory['order']->total_amount }}" readonly>                     
                        </div>                     
                        <div class="mb-3">                         
                            <label for="name"><strong>Name:</strong></label>                         
                            <input type="text" id="name" name="name" class="form-control" value="{{ $Orderhistory['order']->name }}">                     
                        </div>                 
                    </div>                 
                    <!-- Right Column -->
                    <div class="col-md-6">                     
                        <div class="mb-3">                         
                            <label for="phone"><strong>Phone:</strong></label>                         
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $Orderhistory['order']->phone }}">                     
                        </div>                     
                        <div class="mb-3">                         
                            <label for="email"><strong>Email:</strong></label>                         
                            <input type="email" id="email" name="email" class="form-control" value="{{ $Orderhistory['order']->email }}">                     
                        </div>                     
                        <div class="mb-3">                         
                            <label for="shipping_address"><strong>Shipping Address:</strong></label>                         
                            <textarea id="shipping_address" name="shipping_address" class="form-control">{{ $Orderhistory['order']->shipping_address }}</textarea>                     
                        </div>                 
                    </div>                 
                    <div class="col-md-6">                     
                        <div class="mb-3">                         
                            <label for="payment_method"><strong>Payment Method:</strong></label>                         
                            <input type="text" id="payment_method" name="payment_method" class="form-control" value="{{ $Orderhistory['order']->payment_method }}">                     
                        </div>                 
                    </div>                 
                    <div class="col-md-6">                     
                        <div class="mb-3">
                            <label for="status"><strong>Status:</strong></label>
                            <select id="status" name="status" class="form-select">
                                <option value="completed" {{ $Orderhistory['order']->status == 'completed' ? 'selected' :  '' }}>Completed</option>
                                <option value="pending" {{ $Orderhistory['order']->status == 'pending' ? 'selected' : '' }} {{  $Orderhistory['order']->status == 'completed' ? 'hidden' : ''  }}>Pending</option>
                                <option value="canceled" {{ $Orderhistory['order']->status == 'canceled' ? 'selected' :''}} {{  $Orderhistory['order']->status == 'completed' ? 'hidden' : ''  }}>Canceled</option>
                            </select>
                        </div>            
                    </div>             
                </div>             
                <button type="submit" class="btn btn-primary">Update Order</button>           
            </div>         
        </form>       
    </div> 

    <!-- Order Items -->
    <div class="card">         
        <div class="card-header">             
            <h3 class="mb-0">Order Items</h3>           
        </div>             
        <div class="card-body">             
            <table class="table table-striped">                 
                <thead>                     
                    <tr>                         
                        <th scope="col">Product Name</th>                         
                        <th scope="col">Quantity</th>                         
                        <th scope="col">Price</th>                         
                        <th scope="col">Total</th>                         
                        <th scope="col">Action</th>                     
                    </tr>                 
                </thead>                 
                <tbody>                     
                    @foreach ($Orderhistory['details'] as $detail)                     
                    <tr>                         
                        <form action="{{ route('edit.orderdetail', $detail['detail']->id) }}" method="POST">
                            @csrf
                            @method('PUT')                             
                            <td>{{ $detail['product']->name }}</td>                             
                            <td><input type="number" name="quantity" value="{{ $detail['detail']->quantity }}" class="form-control"></td>                             
                            <td>${{ $detail['detail']->price }}</td>                             
                            <td>${{ $detail['detail']->quantity * $detail['detail']->price }}</td>                             
                            <td><button type="submit" class="btn btn-success btn-sm">Update</button></td>                         
                        </form>                     
                    </tr>                     
                    @endforeach                 
                </tbody>             
            </table>         
        </div>     
    </div> 
</div> 
@endsection
