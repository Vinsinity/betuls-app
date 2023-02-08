@extends('layouts.public.app', ['title' => 'Shopping Cart'])
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
    <!--=        Cart Area         =-->
    <!--=========================-->

    <section class="cart-area">
        <div class="container-fluid custom-container">
            <div class="row">
                @livewire('public.cart.cart-items-component')
                @livewire('public.cart.cart-price-component')
            </div>
        </div>
    </section>
    <!-- /.cart-area -->
@endsection
