@extends('layouts.public.app', ['title' => 'Category'])
@section('content')
    <!--=========================-->
    <!--=        Breadcrumb         =-->
    <!--=========================-->

    <section class="breadcrumb-area">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bc-inner">
                        <p><a href="#">Home  |</a> Shop</p>
                    </div>
                </div>
                <!-- /.col-xl-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!--=========================-->
    <!--=        Shop area          =-->
    <!--=========================-->

    <section class="shop-area">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="order-2 order-lg-1 col-lg-3 col-xl-3">
                    <div class=" shop-sidebar left-side">
                        <div class="sidebar-widget sidebar-search">
                            <input type="text" placeholder="Search Product....">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <h6>PRODUCT CATEGORIES</h6>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="#">{{ $category->name }} </a> <span>({{ count($category->products) }})</span></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-widget range-widget">
                            <h6>SEARCH BY PRICE</h6>
                            <div class="price-range">
                                <div id="slider-range"></div>
                                <span>Price :</span>
                                <input type="text" id="amount">
                            </div>
                        </div>

                        <div class="sidebar-widget color-widget">
                            <h6>PRODUCT COLOR</h6>
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>

                        <div class="sidebar-widget product-widget">
                            <h6>BEST SELLERS</h6>
                            <div class="wid-pro">
                                <div class="sp-img">
                                    <img src="{{ asset('public') }}/media/images/product/sb1.jpg" alt="">
                                </div>
                                <div class="small-pro-details">
                                    <h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
                                    <span>$60</span>
                                    <span class="pre-price">$80</span>
                                    <div class="rating">
                                        <ul>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="wid-pro">
                                <div class="sp-img">
                                    <img src="{{ asset('public') }}/media/images/product/sb2.jpg" alt="">
                                </div>
                                <div class="small-pro-details">
                                    <h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
                                    <span>$60</span>
                                    <span class="pre-price">$80</span>
                                    <div class="rating">
                                        <ul>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="wid-pro">
                                <div class="sp-img">
                                    <img src="{{ asset('public') }}/media/images/product/sb3.jpg" alt="">
                                </div>
                                <div class="small-pro-details">
                                    <h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
                                    <span>$60</span>
                                    <span class="pre-price">$80</span>
                                    <div class="rating">
                                        <ul>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="wid-pro">
                                <div class="sp-img">
                                    <img src="{{ asset('public') }}/media/images/product/sb4.jpg" alt="">
                                </div>
                                <div class="small-pro-details">
                                    <h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
                                    <span>$60</span>
                                    <span class="pre-price">$80</span>
                                    <div class="rating">
                                        <ul>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget advertise-img">
                            <a href="#" class="img">
                                <img src="{{ asset('public') }}/media/images/banner/sb1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.col-xl-3 -->
                <div class="order-1 order-lg-2 col-lg-9 col-xl-9">
                    <div class="shop-sorting-area row">
                        <div class="col-4 col-sm-4 col-md-6">
                            <ul class="nav nav-tabs shop-btn" id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="flaticon-menu"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="flaticon-list"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-->
                        <div class="col-12 col-sm-8 col-md-6">
                            <div class="sort-by">
                                <span>Sort by :</span>
                                <select class="orderby" name="orderby">
                                    <option value="menu_order">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option selected="selected">Best Selling</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.shop-sorting-area -->
                    <div class="shop-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">

                                    @foreach($products as $product)
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="sin-product style-two">
                                                <div class="pro-img">
                                                    <img src="{{ asset(Storage::url('image/products/'.$product->images[0]->image)) }}" alt="">
                                                </div>
                                                <div class="mid-wrapper">
                                                    <h5 class="pro-title"><a href="{{ route('product.show', ['slug' => $product->slug]) }}">{{ $product->name }}</a></h5>
                                                    <div class="color-variation">
                                                        <ul>
                                                            <li><i class="fas fa-circle"></i></li>
                                                            <li><i class="fas fa-circle"></i></li>
                                                            <li><i class="fas fa-circle"></i></li>
                                                            <li><i class="fas fa-circle"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>{{ $product->categories[0]->name }} / <span>{{ $product->price }}</span></p>
                                                </div>
                                                <div class="icon-wrapper">
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.sin-product -->
                                        </div>
                                        <!-- /.col- -->
                                    @endforeach

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.tab-pane-->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row no-gutters">
                                    <div class="col-xl-12">
                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp1.jpg" alt="">
                                                    </div>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="#">Laaptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->

                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp2.jpg" alt="">
                                                    </div>
                                                    <span class="new-tag">NEW!</span>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->

                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp3.jpg" alt="">
                                                    </div>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->

                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp1.jpg" alt="">
                                                    </div>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->

                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp2.jpg" alt="">
                                                    </div>
                                                    <span class="new-tag">NEW!</span>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->

                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp1.jpg" alt="">
                                                    </div>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="#">Laaptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->

                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp2.jpg" alt="">
                                                    </div>
                                                    <span class="new-tag">NEW!</span>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->

                                        <div class="sin-product list-pro">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-6 col-xl-4">
                                                    <div class="pro-img">
                                                        <img src="{{ asset('public') }}/media/images/product/lp3.jpg" alt="">
                                                    </div>
                                                    <div class="pro-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                            <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-6 col-xl-8">
                                                    <div class="list-pro-det">
                                                        <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>
                                                        <span>$387</span>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="color-variation">
                                                            <ul>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                                <li><i class="fas fa-circle"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illdolore eu olestie consequat feugiat nulla facilisis at vero eros.Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                            vel illum dolore eu olestie consequat feugiat nulla facilisis at vero eros.</p>
                                                        <a class="btn-two" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.sin-product-->



                                    </div>
                                    <!-- /.col- -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.tab-pane-->
                        </div>
                        <!-- /.tab-content -->
                        <div class="load-more-wrapper">
                            <a href="create-account.html" class="btn-two">Load More</a>
                        </div>
                        <!-- /.load-more-wrapper -->

                    </div>
                    <!-- /.shop-content -->
                </div>
                <!-- /.col- -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.shop-area -->

@endsection
