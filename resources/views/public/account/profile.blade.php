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
    <!-- /.cart-area -->
    <section class="account-area">
        <div class="container-fluid custom-container">
            <div class="row">
                <aside class="col-lg-3">
                    <!-- COMPONENT MENU LIST -->
                    @livewire('public.account.menu-component')
                    <!-- COMPONENT MENU LIST END .// -->
                </aside>
                <div class="col-lg-9">
                    <article class="card">
                        <div class="card-body">
                            <div class="itemside align-items-center">
                                <div class="aside">
                                    <img src="bootstrap5-ecommerce/images/avatars/avatar.webp" class="icon-md img-avatar">
                                </div>
                                <div class="info">
                                    <h6 class="title">Mr. Jackson Mike</h6>
                                    <p>
                                        Email: myusername@gmail.com <i class="dot"></i>
                                        Phone: +1234567890988
                                        <a href="#" class="px-2"><i class="fa fa-pen"></i></a>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="text-muted">Delivery addresses</p>
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <article class="box">
                                        <b class="mx-2 text-muted"><i class="fa fa-map-marker-alt"></i></b>
                                        Tashkent city, Street name, Building 123, House 321
                                    </article>
                                </div>
                                <!-- col.// -->
                                <div class="col-md-6">
                                    <article class="box">
                                        <b class="mx-2 text-muted"><i class="fa fa-map-marker-alt"></i></b>
                                        Moscow city, Street name, Building lenin, House 77
                                    </article>
                                </div>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                            <a href="#" class="btn btn-outline-primary"> <i class="me-2 fa fa-plus"></i> Add new address </a>
                            <hr>
                            <p class="text-muted">Payment methods</p>
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <article class="box"> <b class="mx-2 text-muted"><i class="fa fa-credit-card"></i></b> Visa •••• 9905, Exp: 12/21 </article>
                                </div>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                            <a href="#" class="btn btn-outline-primary"> <i class="me-2 fa fa-plus"></i> Add payment method </a>
                        </div>
                        <!-- card-body .// -->
                    </article> <!-- card .// -->
                </div>
            </div>
        </div>
    </section>
@endsection
