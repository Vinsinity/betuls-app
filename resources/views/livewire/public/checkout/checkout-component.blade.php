<div class="col-md-4 order-md-2 mb-4">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span>
    </h4>
    <ul class="list-group mb-3 sticky-top">
        @foreach(Cart::content() as $item)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">{{ $item->name }}</h6>
                    <small class="text-muted">{{ $item->qty }} pcs.</small>
                </div>
                <span class="text-muted">₺{{$item->price}}</span>
            </li>
        @endforeach
        {{--                        <li class="list-group-item d-flex justify-content-between bg-light">--}}
        {{--                            <div class="text-success">--}}
        {{--                                <h6 class="my-0">Promo code</h6>--}}
        {{--                                <small>EXAMPLECODE</small>--}}
        {{--                            </div>--}}
        {{--                            <span class="text-success">-$5</span>--}}
        {{--                        </li>--}}
            <li class="list-group-item d-flex justify-content-between">
                <span>Subtotal</span>
                <strong>₺{{ Cart::subtotal() }}</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>Tax</span>
                <strong>₺{{ Cart::tax() }}</strong>
            </li>
            @if(isset($cargo))
                <li class="list-group-item d-flex justify-content-between">
                    <span>Cargo</span>
                    <strong>₺{{ $cargo->price }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>₺{{ Cart::total() }} + {{ $cargo->price }}</strong>
                </li>
            @else
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>₺{{ Cart::total() }}</strong>
                </li>
            @endif
    </ul>
    <form class="card p-2">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
        </div>
    </form>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" wire:click="makeOrder" type="submit">Continue to checkout</button>
</div>
