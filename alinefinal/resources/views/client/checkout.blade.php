@extends('client.layoutclient.master')

@section('title', 'Checkout')

@section('content')
 <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Check Out</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="{{ route('checkout.create') }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <h6 class="coupon__code">
                            <span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                        </h6>
                        <h6 class="checkout__title">Billing Details</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>First Name<span>*</span></p>
                                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                       
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" id="address" placeholder="Street Address" class="form-control" required>

                        </div>
                        <div class="checkout__input">
                            <p>commune<span>*</span></p>
                            <input type="text" name="commune" id="commune" class="form-control" required>
                        </div>
                        <div class="checkout__input">
                            <p>district<span>*</span></p>
                            <input type="text" name="district" id="district" class="form-control" required>
                        </div>
                        <div class="checkout__input">
                            <p>province<span>*</span></p>
                            <input type="text" name="province" id="province" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone" id="phone" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                
                        <div class="checkout__input__checkbox">
                            <label for="order_note">
                                Note about your order, e.g., special note for delivery
                                <input type="checkbox" name="order_note" id="order_note">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input">
                            <p>Order Notes<span>*</span></p>
                            <input type="text" name="order_notes" id="order_notes" placeholder="Notes about your order, e.g., special notes for delivery." class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Your Order</h4>
                            <div class="checkout__order__products">Product <span>Total</span></div>
                            <ul class="checkout__total__products">
                                @foreach($cart as $product)
                                    <li>{{ $product['id'] }}. {{ $product['name'] }} <span>${{ $product['total'] }}</span></li>
                                @endforeach
                            </ul>
                            <ul class="checkout__total__all">
                                @php
                                    $total = 0;
                                @endphp
                                @foreach($cart as $product)
                                    @php
                                        $total += $product['total'];
                                    @endphp
                                @endforeach
                                <li>Total <span>${{ $total }}</span></li>
                                <input style="display: none" type="text" name="total_amount" value="{{$total}}">
                            </ul>
                            <div class="checkout__input__checkbox">
                                <label for="payment_method_check">
                                    Check Payment
                                    <input type="checkbox" name="payment_method" id="payment_method_check" value="check_payment">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="payment_method_paypal">
                                    Paypal
                                    <input type="checkbox" name="payment_method" id="payment_method_paypal" value="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection