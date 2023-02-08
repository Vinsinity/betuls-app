<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
{{--        @dd($products)--}}
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
                            @if($product->stock > 0)
                                @if($cart->where('id', $product->id)->count())
                                    IN CART
                                @else
                                    <a wire:click="addToCart({!! $product->id !!})">add to cart</a>
                                @endif
                            @else
                                Out of Stock
                            @endif
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
