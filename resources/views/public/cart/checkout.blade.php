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
            @livewire('public.checkout.checkout-component')
{{--            <div class="row">--}}
{{--                @livewire('public.checkout.checkout-component')--}}
{{--                <div class="col-md-4 order-md-2 mb-4">--}}
{{--                    <h4 class="d-flex justify-content-between align-items-center mb-3">--}}
{{--                        <span class="text-muted">Your cart</span>--}}
{{--                        <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span>--}}
{{--                    </h4>--}}
{{--                    <ul class="list-group mb-3 sticky-top">--}}
{{--                        @foreach(Cart::content() as $item)--}}
{{--                            <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--                                <div>--}}
{{--                                    <h6 class="my-0">{{ $item->name }}</h6>--}}
{{--                                    <small class="text-muted">{{ $item->qty }} pcs.</small>--}}
{{--                                </div>--}}
{{--                                <span class="text-muted">₺{{ number_format($item->price,2,',','.') }}</span>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                        --}}{{--                        <li class="list-group-item d-flex justify-content-between bg-light">--}}
{{--                        --}}{{--                            <div class="text-success">--}}
{{--                        --}}{{--                                <h6 class="my-0">Promo code</h6>--}}
{{--                        --}}{{--                                <small>EXAMPLECODE</small>--}}
{{--                        --}}{{--                            </div>--}}
{{--                        --}}{{--                            <span class="text-success">-$5</span>--}}
{{--                        --}}{{--                        </li>--}}
{{--                        <li class="list-group-item d-flex justify-content-between">--}}
{{--                            <span>Subtotal</span>--}}
{{--                            <strong>₺{{ Cart::subtotal() }}</strong>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item d-flex justify-content-between">--}}
{{--                            <span>Tax</span>--}}
{{--                            <strong>₺{{ Cart::tax() }}</strong>--}}
{{--                        </li>--}}
{{--                        @if(isset($cargo))--}}
{{--                            <li class="list-group-item d-flex justify-content-between">--}}
{{--                                <span>Cargo</span>--}}
{{--                                <strong>₺{{ number_format(($cargo->price / 100),2,',','.') }}</strong>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item d-flex justify-content-between">--}}
{{--                                <span>Total</span>--}}
{{--                                <strong>₺{{ Cart::total() }} + {{ number_format(($cargo->price / 100),2,',','.') }}</strong>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="list-group-item d-flex justify-content-between">--}}
{{--                                <span>Total</span>--}}
{{--                                <strong>₺{{ Cart::total() }}</strong>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    </ul>--}}
{{--                    <form class="card p-2">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="text" class="form-control" placeholder="Promo code">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button type="submit" class="btn btn-secondary">Redeem</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <hr class="mb-4">--}}
{{--                    <button class="btn btn-primary btn-lg btn-block" wire:click="makeOrder" type="submit">Continue to checkout</button>--}}
{{--                </div>--}}
{{--                <div class="col-md-8 order-md-1">--}}
{{--                    @livewire('public.checkout.checkout-address-component')--}}
{{--                    @if(isset($user->addresses))--}}
{{--                        @if(count($user->addresses) > 0)--}}
{{--                            <div class="row">--}}
{{--                                @foreach($user->addresses as $address)--}}
{{--                                    <div class="col-md-4 col-lg-4 col-sm-4">--}}

{{--                                        <label>--}}
{{--                                            <input type="radio" name="address" wire:change="addressSelected({{ $address }})" class="card-input-element" {{ $loop->iteration == 1 ? 'checked' : '' }} />--}}

{{--                                            <div class="card card-default card-input">--}}
{{--                                                <div class="card-header">{{ $address->title }}</div>--}}
{{--                                                <div class="card-body">--}}
{{--                                                    {{ $address->city->name }} - {{ $address->county->name }}<br>--}}
{{--                                                    {{ $address->address }}--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </label>--}}

{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @else--}}
{{--                            <div>--}}
{{--                                <h4 class="mb-3">Billing address</h4>--}}
{{--                                <form wire:submit.prevent="addAddress()">--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label for="title">Title</label>--}}
{{--                                        <input type="text" wire:model="title" class="form-control" id="title" placeholder="Title" required="">--}}
{{--                                        <div class="invalid-feedback" style="width: 100%;"> Address title is required. </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6 mb-3">--}}
{{--                                            <label for="firstName">First name</label>--}}
{{--                                            <input type="text" wire:model="name" class="form-control" id="name" placeholder="" value="" required="">--}}
{{--                                            <div class="invalid-feedback"> Valid first name is required. </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6 mb-3">--}}
{{--                                            <label for="lastName">Last name</label>--}}
{{--                                            <input type="text" wire:model="surname" class="form-control" id="surname" placeholder="" value="" required="">--}}
{{--                                            <div class="invalid-feedback"> Valid last name is required. </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label for="phone">Phone</label>--}}
{{--                                        <input type="tel" wire:model="phone" class="form-control" id="phone" name="phone" placeholder="555XXXXXX">--}}
{{--                                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-3 mb-3">--}}
{{--                                            <label for="city_id">City</label>--}}
{{--                                            <select wire:model="city_id" wire:change="citySelected()" class="custom-select d-block w-100" id="city_id" name="city_id" required="">--}}
{{--                                                <option selected>Choose...</option>--}}
{{--                                                @foreach($cities as $city)--}}
{{--                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                            <div class="invalid-feedback"> Please select a valid city. </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3 mb-3">--}}
{{--                                            <label for="county_id">County</label>--}}
{{--                                            <select wire:model="county_id" wire:change="countySelected()" class="custom-select d-block w-100" id="county_id" name="county_id" required="">--}}
{{--                                                <option value="">Choose...</option>--}}
{{--                                                @foreach($this->counties as $county)--}}
{{--                                                    <option value="{{ $county->id }}">{{ $county->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                            <div class="invalid-feedback"> Please provide a valid state. </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3 mb-3">--}}
{{--                                            <label for="district_id">District</label>--}}
{{--                                            <select wire:model="district_id" wire:change="districtSelected()" class="custom-select d-block w-100" id="district_id" name="district_id" required="">--}}
{{--                                                <option value="">Choose...</option>--}}
{{--                                                @foreach($this->districts as $district)--}}
{{--                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                            <div class="invalid-feedback"> Zip code required. </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3 mb-3">--}}
{{--                                            <label for="neighborhood_id">Neighborhood</label>--}}
{{--                                            <select wire:model="neighborhood_id" class="custom-select d-block w-100" id="neighborhood_id" name="neighborhood_id" required="">--}}
{{--                                                <option value="">Choose...</option>--}}
{{--                                                @foreach($this->neighborhoods as $neighborhood)--}}
{{--                                                    <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                            <div class="invalid-feedback"> Zip code required. </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="address">Address</label>--}}
{{--                                        <input type="text" wire:model="address" class="form-control" id="address" placeholder="Enter your address.." required="">--}}
{{--                                        <div class="invalid-feedback"> Please enter your shipping address. </div>--}}
{{--                                    </div>--}}
{{--                                    <hr class="mb-4">--}}
{{--                                    --}}{{--            <div class="row">--}}
{{--                                    --}}{{--                <div class="col-md-12 mb-3">--}}
{{--                                    --}}{{--                    <label for="name">Address name</label>--}}
{{--                                    --}}{{--                    <input type="text" wire:model="name" class="form-control" required>--}}
{{--                                    --}}{{--                </div>--}}
{{--                                    --}}{{--            </div>--}}
{{--                                    --}}{{--            <div class="mb-3">--}}
{{--                                    --}}{{--                <label for="address">Address</label>--}}
{{--                                    --}}{{--                <input type="text" wire:model="address" class="form-control" required>--}}
{{--                                    --}}{{--                <div class="invalid-feedback"> Please enter your shipping address. </div>--}}
{{--                                    --}}{{--            </div>--}}
{{--                                    <button class="btn btn-primary" type="submit">Save Address</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                    @endif--}}
{{--                    <hr class="mb-4">--}}
{{--                    @livewire('public.checkout.cargo-component')--}}
{{--                    <div class="row">--}}
{{--                        @foreach($cargos as $cargo)--}}
{{--                            <div class="col-md-4 col-lg-4 col-sm-4">--}}

{{--                                <label class="w-100">--}}
{{--                                    <input type="radio" name="cargo" wire:change="cargo({{$cargo}})" class="card-input-element" {{ $loop->iteration == 1 ? 'checked' : '' }}/>--}}

{{--                                    <div class="card card-default card-input">--}}
{{--                                        <div class="card-header">{{ $cargo->name }}</div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            {{ $cargo->showPrice()  }}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </label>--}}

{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}

{{--                    <hr class="mb-4">--}}
{{--                    @livewire('public.checkout.payment-component')--}}
{{--                    <div>--}}
{{--                        <h4 class="mb-3">Payment</h4>--}}
{{--                        <div class="d-block my-3">--}}
{{--                            <div class="custom-control custom-radio">--}}
{{--                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">--}}
{{--                                <label class="custom-control-label" for="credit">Credit card</label>--}}
{{--                            </div>--}}
{{--                            <div class="custom-control custom-radio">--}}
{{--                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">--}}
{{--                                <label class="custom-control-label" for="debit">Debit card</label>--}}
{{--                            </div>--}}
{{--                            <div class="custom-control custom-radio">--}}
{{--                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">--}}
{{--                                <label class="custom-control-label" for="paypal">PayPal</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 mb-3">--}}
{{--                                <label for="cc-name">Name on card</label>--}}
{{--                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">--}}
{{--                                <small class="text-muted">Full name as displayed on card</small>--}}
{{--                                <div class="invalid-feedback"> Name on card is required </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 mb-3">--}}
{{--                                <label for="cc-number">Credit card number</label>--}}
{{--                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">--}}
{{--                                <div class="invalid-feedback"> Credit card number is required </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-3 mb-3">--}}
{{--                                <label for="cc-expiration">Expiration</label>--}}
{{--                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">--}}
{{--                                <div class="invalid-feedback"> Expiration date required </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-3 mb-3">--}}
{{--                                <label for="cc-cvv">CVV</label>--}}
{{--                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">--}}
{{--                                <div class="invalid-feedback"> Security code required </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- /.cart-area -->
@endsection
