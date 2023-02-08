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
                @livewire('public.checkout.checkout-component')
                <div class="col-md-8 order-md-1">
                    @livewire('public.checkout.checkout-address-component')
                    <hr class="mb-4">
                    @livewire('public.checkout.cargo-component')
                    <hr class="mb-4">
                    @livewire('public.checkout.payment-component')
                </div>
            </div>
        </div>
    </section>
    <!-- /.cart-area -->
@endsection
