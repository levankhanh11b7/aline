@extends('client.layoutclient.master')

@section('title', 'Shipping cart')

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ asset('index.html') }}">Home</a>
                        <a href="{{ asset('shop.html') }}">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        @if (isset($cart) )
            
      
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $product )
                            <tr>
                             
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                    
                                        <img width="90px" height=" 90px" src="{{ asset('storage/'. $product['image']) }}" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{ $product['name'] }}</h6>
                                        <h5>{{ $product['price'] }}</h5>
                                    </div>
                                </td>
                                <form id="updateCartForm" action="{{ route('update.cart',$product['id']) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2"  id="quantityInput" >
                                            <input type="number" value="{{ $product['quantity'] }}" name="quantity" id="quantityInput"  >
                                            <button type="submit" style="display:none;">Update cart</button>
                                        </div>
                                    </div>
                                </td>
                            </form>
                                <td class="cart__price">${{ $product['total'] }}</td>
                                <td class="cart__close"><a href="{{ route('remove.cart', $product['id'] ) }}"><i class="fa fa-close"></i></a></td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        {{-- <li>Subtotal <span>${{ session('cart')['total'] }}</span></li> --}}
                     

@foreach($cart as $product)
@php
    $total += $product['total'];
@endphp
@endforeach

                        <li>Total <span>{{  $total}}</span></li>
                     
                    </ul>
                    <a href="{{ route('checkout') }}" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
        @else
        <h1>Giỏ hàng  trống</h1>
        @endif
    </div>
   
</section>
<!-- Shopping Cart Section End -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('updateCartForm');
        const quantityInput = document.getElementById('quantityInput');
        
        function submitForm() {
            form.submit(); // Gửi form khi cần thiết
        }
    
        // quantityInput.addEventListener('input', function () {
        //     submitForm(); // Gửi form khi giá trị của input thay đổi
        // });
    
        quantityInput.addEventListener('blur', function () {
          quantityInput.addEventListener('input', function () {
          submitForm(); // Gửi form khi giá trị của input thay đổi
         });
        });
    });
    </script>
    
    
@endsection
