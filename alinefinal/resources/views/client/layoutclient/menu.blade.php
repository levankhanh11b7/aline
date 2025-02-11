<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->

<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">




                        </div>
                        <div class="header__top__hover">
                            @if (Auth::user() !== null)
                                <span>{{ Auth::user()->name }}</span>
                            @else
                                <span>Đăng nhập</span>
                            @endif


                            <ul>
                                @if (Auth::user() !== null)
                                    <li>
                                        <x-dropdown-link :href="route('profile.edit')">
                                            <span style="color: black"> {{ __('Profile') }}</span>
                                        </x-dropdown-link>
                                    </li>


                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li>
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                               <span style="color: black">{{ __('Log Out') }}</span> 
                                            </x-dropdown-link>
                                        </li>
                                    </form>
                                @else
                                    <li>
                                        <x-dropdown-link :href="route('login')">
                                            <span style="color: black">{{ __('Login') }}</span>
                                        </x-dropdown-link>
                                    </li>
                                    <li>
                                        <x-dropdown-link :href="route('register')">
                                            <span style="color: black">{{ __('Register') }}</span>
                                        </x-dropdown-link>
                                    </li>
                                @endif



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contacts</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('order.history') }}">Order</a></li>
                    </ul>
                </nav>

            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option"> 
                    
                    <a href="{{ route('cart.index') }}"><img src="img/icon/cart.png" alt=""> </a>
                  
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
