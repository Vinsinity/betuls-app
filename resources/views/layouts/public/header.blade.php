<!--=========================-->
<!--=        Header         =-->
<!--=========================-->
<header id="header" class="header-area">
    <div class="container-fluid custom-container menu-rel-container">
        <div class="row">
            <!-- Logo
            ============================================= -->

            <div class="col-lg-6 col-xl-2">
                <div class="logo">
                    <a href="{{{ route('home') }}}">
                        <img src="{{ asset('public') }}/media/images/logo.png" alt="">
                    </a>
                </div>
            </div>

            <!-- Main menu
            ============================================= -->

            <div class="col-lg-12 col-xl-7 order-lg-3 order-xl-2 menu-container">
                <div class="mainmenu">
                    <ul class="navigation">
                        @foreach($categories as $category)
                            @if(count($category->children) > 0 )
                                <li class="has-child">
                                    <a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                    <ul class="sub-menu">
                                        @foreach($category->children as $children)
                                            <li><a href="{{ route('categories.show', ['slug' => $children->slug]) }}">{{ $children->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    {{--                        <ul id="navigation">--}}
                    {{--                            <li class="has-child "><a href="index.html" class="active">home</a>--}}
                    {{--                                <ul class="sub-menu">--}}
                    {{--                                    <li><a href="index.html">Home one</a></li>--}}
                    {{--                                    <li><a href="index-2.html">Home two</a></li>--}}
                    {{--                                    <li><a href="index-3.html">Home three</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li><a href="shop.html">Collections</a></li>--}}
                    {{--                            <li class="has-child"><a href="index.html">Men</a>--}}
                    {{--                                <div class="mega-menu">--}}
                    {{--                                    <div class="mega-catagory per-20">--}}
                    {{--                                        <h4><a class="font-red" href="shop.html">Woman Dresses</a></h4>--}}
                    {{--                                        <ul class="mega-button">--}}
                    {{--                                            <li><a href="shop.html">Woman Dresses</a></li>--}}
                    {{--                                            <li><a href="shop.html">Women & Flowers</a></li>--}}
                    {{--                                            <li><a href="shop.html">Girl Hat in Sunlights</a></li>--}}
                    {{--                                            <li><a href="shop.html">Men Watches</a></li>--}}
                    {{--                                            <li><a href="shop.html">Clothes Fashion</a></li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="mega-catagory per-20">--}}
                    {{--                                        <h4><a class="font-red" href="shop.html">Clothes Fashion</a></h4>--}}
                    {{--                                        <ul class="mega-button">--}}
                    {{--                                            <li><a href="shop.html">Woman Dresses</a></li>--}}
                    {{--                                            <li><a href="shop.html">Girl Hat in Sunlights</a></li>--}}
                    {{--                                            <li><a href="shop.html">Men Watches</a></li>--}}
                    {{--                                            <li><a href="shop.html">Clothes Fashion</a></li>--}}
                    {{--                                            <li><a href="shop.html">Woman Dresses</a></li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="mega-catagory mega-img per-30">--}}
                    {{--                                        <a href="#"><img src="{{ asset('public') }}/media/images/banner/mmb1.jpg" alt=""></a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="mega-catagory mega-img per-30">--}}
                    {{--                                        <a href="#"><img src="{{ asset('public') }}/media/images/banner/mmb2.jpg" alt=""></a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="has-child"><a href="index.html">Women</a>--}}
                    {{--                                <div class="mega-menu five-col">--}}
                    {{--                                    <div class="mega-product">--}}
                    {{--                                        <h4><a class="font-red" href="shop.html">Product Category</a></h4>--}}
                    {{--                                        <ul class="mega-button">--}}
                    {{--                                            <li><a href="shop.html">Woman Dresses</a></li>--}}
                    {{--                                            <li><a href="shop.html">Women & Flowers</a></li>--}}
                    {{--                                            <li><a href="shop.html">Girl Hat in Sunlights</a></li>--}}
                    {{--                                            <li><a href="shop.html">Men Watches</a></li>--}}
                    {{--                                            <li><a href="shop.html">Clothes Fashion</a></li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="mega-product">--}}
                    {{--                                        <div class="sin-product">--}}
                    {{--                                            <div class="pro-img">--}}
                    {{--                                                <img src="{{ asset('public') }}/media/images/product/10.jpg" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="mid-wrapper">--}}
                    {{--                                                <h5 class="pro-title"><a href="product.html">High-Low Dresses</a></h5>--}}
                    {{--                                                <span>$60.00</span>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="mega-product">--}}
                    {{--                                        <div class="sin-product">--}}
                    {{--                                            <div class="pro-img">--}}
                    {{--                                                <img src="{{ asset('public') }}/media/images/product/11.jpg" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="mid-wrapper">--}}
                    {{--                                                <h5 class="pro-title"><a href="product.html">Empire Dresses</a></h5>--}}
                    {{--                                                <span>$10.00</span>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="mega-product">--}}
                    {{--                                        <div class="sin-product">--}}
                    {{--                                            <div class="pro-img">--}}
                    {{--                                                <img src="{{ asset('public') }}/media/images/product/12.jpg" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="mid-wrapper">--}}
                    {{--                                                <h5 class="pro-title"><a href="product.html">Bodycon Dresses</a></h5>--}}
                    {{--                                                <span>$40.00</span>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="mega-product">--}}
                    {{--                                        <div class="sin-product">--}}
                    {{--                                            <div class="pro-img">--}}
                    {{--                                                <img src="{{ asset('public') }}/media/images/product/13.jpg" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="mid-wrapper">--}}
                    {{--                                                <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>--}}
                    {{--                                                <span>$70.00</span>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="has-child"><a href="shop.html">Shop</a>--}}
                    {{--                                <ul class="sub-menu">--}}
                    {{--                                    <li><a href="shop.html">shop with sidebar</a></li>--}}
                    {{--                                    <li><a href="shop-four-grid.html">shop four grid</a></li>--}}
                    {{--                                    <li><a href="shop-without-sidebar.html">shop without sidebar</a></li>--}}
                    {{--                                    <li><a href="product.html">Product details</a></li>--}}
                    {{--                                    <li><a href="product-fullwidth.html">Product Fullwidth</a></li>--}}
                    {{--                                    <li><a href="cart.html">Cart</a></li>--}}
                    {{--                                    <li><a href="account.html">Order</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="has-child"><a href="blog.html">Blog</a>--}}
                    {{--                                <ul class="sub-menu">--}}
                    {{--                                    <li><a href="single.html">Single post</a></li>--}}
                    {{--                                    <li><a href="blog.html">Blog three grid</a></li>--}}
                    {{--                                    <li><a href="blog-two-grid.html">Blog two grid</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li><a href="contact.html">CONTACT</a></li>--}}
                    {{--                        </ul>--}}
                </div>
            </div>
            <!--Main menu end-->
            <div class="col-lg-6 col-xl-3 order-lg-2 order-xl-3">
                <div class="header-right-one">
                    <ul>
                        <li class="language">
                            <select class="custom-select">
                                <option selected>ENG</option>
                                <option value="1">FRE</option>
                                <option value="2">CHI</option>
                            </select>
                        </li>
                        <li class="curency">
                            <select class="custom-select">
                                <option selected>USD</option>
                                <option value="1">EUR</option>
                                <option value="2">GBP</option>
                            </select>
                        </li>
                        <li class="user-login">
                            @if(Auth::user())
                                <a href="{{ route('account.profile' )}}">{{Auth::user()->name}}</a>
                            @else
                                <a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                            @endif
                        </li>
                        @livewire('cart-counter')

                        <li class="top-search">
                            <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <input type="text" class="search-input" placeholder="Search">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Container-Fluid-->
</header>
<!--Main Header end-->
<!--=========================-->
<!--=        Mobile Header     =-->
<!--=========================-->
<header class="mobile-header">
    <div class="container-fluid custom-container">
        <div class="row">

            <!-- Mobile menu Opener
            ============================================= -->
            <div class="col-4">
                <div class="accordion-wrapper">
                    <a href="#" class="mobile-open"><i class="flaticon-menu-1"></i></a>
                </div>
            </div>
            <div class="col-4">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('public') }}/media/images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                @livewire('public.cart.mobile-cart-counter-component')
            </div>
        </div>
        <!-- /.row end -->
    </div>
    <!-- /.container end -->
</header>

<div class="accordion-wrapper">
    <!-- Mobile Menu Navigation
        ============================================= -->
    <div id="mobilemenu" class="accordion">
        <ul>
            <li class="mob-logo"><a href="index.html">
                    <img src="{{ asset('public') }}/media/images/logo.png" alt="">
                </a></li>
            <li><a href="#" class="closeme"><i class="flaticon-close"></i></a></li>
            @foreach($categories as $category)
                @if(count($category->children) > 0 )
                    <li>
                        <a href="{{ route('categories.show', ['slug' => $category->slug]) }}" class="link">{{ $category->name }}<i class="fa fa-chevron-down"></i></a>
                        <ul class="submenu">
                            @foreach($category->children as $children)
                                <li><a href="{{ route('categories.show', ['slug' => $children->slug]) }}">{{ $children->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="out-link"><a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endif
            @endforeach
        </ul>
        <div class="mobile-login">
            @if(Auth::user())
                Welcome, <a href="{{ route('account.profile') }}">{{ Auth::user()->name }}</a>
            @else
                <a href="{{ route('login') }}">Log in</a> |
                <a href="{{ route('register') }}">Create Account</a>
            @endif
        </div>
        <form action="#" id="moble-search">
            <input placeholder="Search...." type="text">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
