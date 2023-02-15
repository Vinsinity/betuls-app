<div class="col-xl-9">
    <div class="cart-table">
        <table class="tables">
            <thead>
            <tr>
                <th></th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>unit price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @if(count($cart) > 0)
                @foreach($cart as $item)
                    <tr>
                        <td>
                            <button wire:click="deleteFromCart('{!! $item->rowId !!}')">X</button>
                        </td>
                        <td>
                            <a href="#">
                                <div class="product-image">
                                    <img width="180px" alt="{{ $item->name }}" src="{{ asset(Storage::url('image/products/'.$item->options->image)) }}">
                                </div>
                            </a>
                        </td>
                        <td>
                            <div class="product-title">
                                <a href="#">{{ $item->name }}</a>
                            </div>
                        </td>
                        <td>
                            <div class="quantity">
                                <input type="number" value="{{ $item->qty }}" wire:change="update($event.target.value, '{{$item->rowId}}')">
                            </div>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    <div class="price-box">
                                        <span class="price">₺{{ $item->price }}</span>
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="total-price-box">
                                <span class="price">₺{{ $item->qty * $item->price }}</span>
                            </div>
                        </td>

                    </tr>
                    <!-- /.single product  -->
                @endforeach
            @else
                <tr><td colspan="6">Sepette ürün yok</td></tr>
            @endif
            </tbody>
        </table>

    </div>
    <!-- /.cart-table -->
    <div class="row cart-btn-section">
        <div class="col-12 col-sm-8 col-lg-6">
            <div class="cart-btn-left">
                <a class="coupon-code" href="#">Coupon Code</a>
                <a href="#">Apply Coupon</a>
            </div>
        </div>
        <!-- /.col-xl-6 -->
        <div class="col-12 col-sm-4 col-lg-6">
            <div class="cart-btn-right">
                <a href="#">Update Cart</a>
            </div>
        </div>
        <!-- /.col-xl-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.col-xl-9 -->
