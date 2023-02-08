@extends('layouts.admin.app', ['title' => 'Order #'.str_pad($order->order_number,7,'0',STR_PAD_LEFT)])
@section('content')
    <!-- start: page -->
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <div class="card card-modern">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="offset-2 col-lg-8">--}}
{{--                            <div class="row align-items-center mb-2">--}}
{{--                                <div class="col text-end">--}}
{{--                                    <label for="name" class="control-label text-lg-end mb-0">Customer Name</label>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <span class="form-control">--}}
{{--                                        {{ $order->user->name }}--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                                <div class="col text-end"></div>--}}
{{--                                <div class="col"></div>--}}
{{--                            </div>--}}
{{--                            <div class="row align-items-center mb-2">--}}
{{--                                <div class="col text-end">--}}
{{--                                    <label for="status">Order Status</label>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <select class="form-control" id="status">--}}
{{--                                        @foreach($order_statuses as $status)--}}
{{--                                            <option value="{{ $status->id }}" {{ $status->id == $order->order_status_id ? 'selected' : ''}}>--}}
{{--                                                {{ $status->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col text-end"></div>--}}
{{--                                <div class="col"></div>--}}
{{--                            </div>--}}
{{--                            <hr class="solid opacity-4">--}}
{{--                            <div class="row align-items-center mb-2">--}}
{{--                                <div class="col text-end">--}}
{{--                                    <label for="">Cargo</label>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <div class="col">--}}
{{--                                        <select class="form-control">--}}
{{--                                            @foreach($cargos as $cargo)--}}
{{--                                                <option value="{{ $cargo->id }}" {{ $cargo->id == $order->cargo_id ? 'selected' : ''}}>--}}
{{--                                                    {{ $cargo->name }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col text-end">Tracking Number</div>--}}
{{--                                <div class="col">--}}
{{--                                    <input class="form-control" type="text">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr class="solid opacity-4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-3"></div>--}}
{{--                                <div class="col">--}}
{{--                                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-print" aria-hidden="true"></i> Fatura Yazdır</button>--}}
{{--                                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-print" aria-hidden="true"></i> Sipariş Yazdır</button>--}}
{{--                                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-envelope" aria-hidden="true"></i> Mesaj Gönder</button>--}}
{{--                                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-sms" aria-hidden="true"></i> SMS Gönder</button>--}}
{{--                                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-undo" aria-hidden="true"></i> İptal/İade</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr class="solid opacity-4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <strong>User</strong>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">{{ $order->user->name }}</div>--}}
{{--                                <div class="col"></div>--}}
{{--                                <div class="col-4"></div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <strong>Order Number</strong>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">#{{ str_pad($order->order_number,7,'0',STR_PAD_LEFT) }}</div>--}}
{{--                                <div class="col">--}}
{{--                                    <strong>Order Status</strong>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">{{ $order->status->name }}</div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <strong>Order Date</strong>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">22 Ocak 2023 Cuma</div>--}}
{{--                                <div class="col-4">{{ $order->createDateFull() }}</div>--}}
{{--                                <div class="col">--}}
{{--                                    <strong>Update Date</strong>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">{{ $order->updated_at == $order->created_at ? '' : $order->updated_at }}</div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <strong>Cargo</strong>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">{{ $order->cargo->name }}</div>--}}
{{--                                <div class="col">--}}
{{--                                    <strong>Total</strong>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">₺{{ $order->total_price }}</div>--}}
{{--                            </div>--}}
{{--                            <hr class="solid opacity-4 mb-4 mt-4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <table class="table table-responsive-md table-hover mb-0 align-middle">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th width="100px"></th>--}}
{{--                                            <th>Product Name</th>--}}
{{--                                            <th>Quantity</th>--}}
{{--                                            <th>Total Price</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        @foreach($order->products as $product)--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <img src="{{ asset(Storage::url('image/products/'.$product->product->images[0]->image)) }}" width="100px" alt="">--}}
{{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    {{ $product->product->name }}--}}
{{--                                                </td>--}}
{{--                                                <td>{{ $product->quantity }} Adet</td>--}}
{{--                                                <td>₺{{ $product->price }}</td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr class="solid opacity-4 mb-4 mt-4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <table class="table table-responsive-md invoice-items align-middle">--}}
{{--                                        <thead>--}}
{{--                                        <tr class="text-dark">--}}
{{--                                            <th id="cell-id"     class="font-weight-semibold" width="100px"></th>--}}
{{--                                            <th id="cell-item"   class="font-weight-semibold">Item</th>--}}
{{--                                            <th id="cell-price"  class="text-center font-weight-semibold">Price</th>--}}
{{--                                            <th id="cell-qty"    class="text-center font-weight-semibold">Quantity</th>--}}
{{--                                            <th id="cell-total"  class="text-center font-weight-semibold">Total</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        @foreach($order->products as $product)--}}
{{--                                            <tr>--}}
{{--                                                <td width="100px">--}}
{{--                                                    <img src="{{ asset(Storage::url('image/products/'.$product->product->images[0]->image)) }}" width="100px" alt="">--}}
{{--                                                </td>--}}
{{--                                                <td class="font-weight-semibold text-dark">--}}
{{--                                                    {{ $product->product->name }}--}}
{{--                                                </td>--}}
{{--                                                <td class="text-center">₺{{ $product->price }}</td>--}}
{{--                                                <td class="text-center">{{ $product->quantity }}</td>--}}
{{--                                                <td class="text-center">₺{{ number_format($product->price * $product->quantity,2,'.','') }}</td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                    <div class="invoice-summary">--}}
{{--                                        <div class="row justify-content-end">--}}
{{--                                            <div class="col-sm-4">--}}
{{--                                                <table class="table h6 text-dark">--}}
{{--                                                    <tbody>--}}
{{--                                                    <tr class="b-top-0">--}}
{{--                                                        <td colspan="2">Subtotal</td>--}}
{{--                                                        <td class="text-left">₺{{ $order->total_price }}</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td colspan="2">Shipping</td>--}}
{{--                                                        <td class="text-left">₺{{ $order->cargo_price }}</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr class="h4">--}}
{{--                                                        <td colspan="2">Grand Total</td>--}}
{{--                                                        <td class="text-left">₺{{ number_format($order->total_price + $order->cargo_price,2,'.','') }}</td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end: page -->
    <!-- start: page -->
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="card card-modern">
                <div class="card-body">
                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-print" aria-hidden="true"></i> Fatura Yazdır</button>
                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-print" aria-hidden="true"></i> Sipariş Yazdır</button>
                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-envelope" aria-hidden="true"></i> Mesaj Gönder</button>
                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-sms" aria-hidden="true"></i> SMS Gönder</button>
                    <button type="button" class="mb-1 mt-1 me-1 btn btn-default"><i class="fa fa-undo" aria-hidden="true"></i> İptal/İade</button>
                </div>
            </div>
        </div>
    </div>
    <form class="order-details action-buttons-fixed mt-4" action="{{ route('admin.orders.update', ['number' => $order->order_number]) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xl-7 mb-4 mb-xl-0">
                <div class="card card-modern">
                    <div class="card-header">
                        <h2 class="card-title">General</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group col mb-3">
                                        <label for="order_status_id">Status</label>
                                        <select class="form-control form-control-modern" name="order_status_id" id="order_status_id" required>
                                            @foreach($order_statuses as $status)
                                                <option value="{{ $status->id }}" {{ $status->id == $order->order_status_id ? 'selected' : ''}}>
                                                    {{ $status->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group col mb-3">
                                        <label for="cargo_id">Cargo</label>
                                        <select class="form-control form-control-modern" name="cargo_id" id="cargo_id" required>
                                            @foreach($cargos as $cargo)
                                                <option value="{{ $cargo->id }}" {{ $cargo->id == $order->cargo_id ? 'selected' : ''}}>
                                                    {{ $cargo->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group col mb-3">
                                        <label for="tracking_number">Tracking Number</label>
                                        <input class="form-control form-control-modern" id="tracking_number" name="tracking_number" value="{{ $order->tracking_number }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group col mb-3">
                                        <label for="user_name">Customer</label>
                                        <input class="form-control form-control-modern" id="user_name" value="{{ $order->user->name }}" disabled/>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Date Created</label>
                                    <input type="text" class="form-control form-control-modern" value="{{ $order->createDateFull() }}"  disabled/>
                                </div>
                                <div class="col">
                                    <label>Date Updated</label>
                                    <input type="text" class="form-control form-control-modern" value="{{ $order->updateDateFull() }}"  disabled/>
                                </div>
                            </div>
                        </div>
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group col mb-3">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="form-group col mb-3">--}}
{{--                                            <label for="user_name">Discount Type</label>--}}
{{--                                            <input class="form-control form-control-modern" id="user_name" value="Discount" disabled/>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <label>Discount Price</label>--}}
{{--                                        <input type="text" class="form-control form-control-modern" value="{{ $order->createDateFull() }}"  disabled/>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <label>Date Updated</label>--}}
{{--                                        <input type="text" class="form-control form-control-modern" value="{{ $order->updateDateFull() }}"  disabled/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>

            </div>
            <div class="col-xl-5">

                <div class="card card-modern h-100">
                    <div class="card-header">
                        <h2 class="card-title">Addresses</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-auto me-xl-5 pe-xl-5 mb-4 mb-xl-0">
                                <h3 class="text-color-dark font-weight-bold text-4 line-height-1 mt-0 mb-3">BILLING</h3>
                                <ul class="list list-unstyled list-item-bottom-space-0">
                                    <li>{{ $order->address->title }}</li>
                                    <li>{{ $order->address->name.' '.$order->address->surname }}</li>
                                    <li>{{ $order->address->address }}</li>
                                    <li>{{ $order->address->neighborhood->name }}</li>
                                    <li>{{ $order->address->county->name.'/'.$order->address->city->name }}</li>
{{--                                    <li>USA</li>--}}
                                </ul>
{{--                                <strong class="d-block text-color-dark">Email address:</strong>--}}
{{--                                <a href="mailto:johndoe@domain.com"></a>--}}
                                <strong class="d-block text-color-dark mt-3">Phone:</strong>
                                <a href="tel:+5551234" class="text-color-dark">{{ $order->address->phone_number }}</a>
                            </div>
                            <div class="col-xl-auto ps-xl-5">
                                <h3 class="font-weight-bold text-color-dark text-4 line-height-1 mt-0 mb-3">SHIPPING</h3>
                                <ul class="list list-unstyled list-item-bottom-space-0">
                                    <li>{{ $order->shippingAddress->title }}</li>
                                    <li>{{ $order->shippingAddress->name.' '.$order->shippingAddress->surname }}</li>
                                    <li>{{ $order->shippingAddress->address }}</li>
                                    <li>{{ $order->shippingAddress->neighborhood->name }}</li>
                                    <li>{{ $order->shippingAddress->county->name.'/'.$order->shippingAddress->city->name }}</li>
{{--                                    <li>USA</li>--}}
                                </ul>
{{--                                <strong class="d-block text-color-dark">Email address:</strong>--}}
{{--                                <a href="mailto:johndoe@domain.com">johndoe@domain.com</a>--}}
                                <strong class="d-block text-color-dark mt-3">Phone:</strong>
                                <a href="tel:+5551234" class="text-color-dark">{{ $order->shippingAddress->phone_number }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="card card-modern">
                    <div class="card-header">
                        <h2 class="card-title">Products</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-ecommerce-simple table-ecommerce-simple-border-bottom table-borderless table-striped mb-0" style="min-width: 380px;">
                                <thead>
                                <tr>
                                    <th width="8%" class="ps-4">#</th>
                                    <th width="65%">Name</th>
                                    <th width="5%" class="text-end">Cost</th>
                                    <th width="7%" class="text-end">Qty</th>
                                    <th width="5%" class="text-end">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->products as $orderProduct)
                                    <tr>
                                        <td class="ps-4"><strong>{{ $loop->iteration }}</strong></td>
                                        <td><strong>{{ $orderProduct->product->name }}</strong></td>
                                        <td class="text-end">₺{{ $orderProduct->price }}</td>
                                        <td class="text-end">{{ $orderProduct->quantity }}</td>
                                        <td class="text-end">₺{{ number_format($orderProduct->price * $orderProduct->quantity,2,'.','') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="row justify-content-end flex-column flex-lg-row my-3">
                            <div class="col-auto me-5">
                                <h3 class="font-weight-bold text-color-dark text-4 mb-3">Items Subtotal</h3>
                                <span class="d-flex align-items-center">
													{{ count($order->products) }} Items
													<i class="fas fa-chevron-right text-color-primary px-3"></i>
													<b class="text-color-dark text-xxs">₺{{ $order->products->sum('price') }}</b>
												</span>
                            </div>
                            <div class="col-auto me-5">
                                <h3 class="font-weight-bold text-color-dark text-4 mb-3">Shipping</h3>
                                <span class="d-flex align-items-center">
													Flat Rate
													<i class="fas fa-chevron-right text-color-primary px-3"></i>
													<b class="text-color-dark text-xxs">₺{{ $order->cargo_price }}</b>
												</span>
                            </div>
                            <div class="col-auto">
                                <h3 class="font-weight-bold text-color-dark text-4 mb-3">Order Total</h3>
                                <span class="d-flex align-items-center justify-content-lg-end">
													<strong class="text-color-dark text-5">₺{{ number_format($order->total_price + $order->cargo_price,2,'.','') }}</strong>
												</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="card card-modern">
                    <div class="card-header">
                        <h2 class="card-title">Order Notes</h2>
                    </div>
                    <div class="card-body">
                        <div class="ecommerce-timeline mb-3">
                            <div class="ecommerce-timeline-items-wrapper">
                                <div class="ecommerce-timeline-item">
                                    <small>added on June 26, 2020 at 4:01 pm by admin - <a href="#" class="text-color-danger">Delete note</a></small>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi</p>
                                </div>
                                <div class="ecommerce-timeline-item">
                                    <small>added on June 26, 2020 at 4:01 pm by admin - <a href="#" class="text-color-danger">Delete note</a></small>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi</p>
                                </div>
                                <div class="ecommerce-timeline-item">
                                    <small>added on June 26, 2020 at 4:01 pm by admin - <a href="#" class="text-color-danger">Delete note</a></small>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col pb-1 mb-3">
                                <label>Add Note</label>
                                <textarea class="form-control form-control-modern" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <a href="#" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Add Note</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row action-buttons">
            <div class="col-12 col-md-auto">
                <button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
                    <i class="bx bx-save text-4 me-2"></i> Save Order
                </button>
            </div>
            <div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
                <a href="ecommerce-orders-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
            </div>
            <div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
                <a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
                    <i class="bx bx-trash text-4 me-2"></i> Delete Order
                </a>
            </div>
        </div>
    </form>
    <!-- end: page -->
@endsection
