@extends('layouts.admin.app')
@section('content')
    <!-- start: page -->
    <div class="row">
        <div class="col">
            <div class="card card-modern">
                <div class="card-body">
                    <div class="datatables-header-footer-wrapper">
                        <div class="datatable-header">
                            <div class="row align-items-center mb-3">

                                <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                                    <a href="ecommerce-orders-detail.html" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Order</a>
                                </div>

                                <div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
                                    <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                        <label class="ws-nowrap me-3 mb-0">Filter By:</label>
                                        <select class="form-control select-style-1 filter-by" name="filter-by">
                                            <option value="all" selected>All</option>
                                            <option value="1">ID</option>
                                            <option value="2">Customer Name</option>
                                            <option value="3">Date</option>
                                            <option value="3">Update Date</option>
                                            <option value="4">Total</option>
                                            <option value="5">Status</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
                                    <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                        <label class="ws-nowrap me-3 mb-0">Show:</label>
                                        <select class="form-control select-style-1 results-per-page" name="results-per-page">
                                            <option value="12" selected>12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-auto ps-lg-1">
                                    <div class="search search-style-1 search-style-1-lg mx-lg-auto">
                                        <div class="input-group">
                                            <input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order">
                                            <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-sm table-responsive-lg table-ecommerce-simple table-borderless table-striped mb-0" id="datatable-ecommerce-list">

                            <thead>
                                <tr>
                                    <th width="3%">
                                        <label>
                                            <input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" />
                                        </label>
                                    </th>
                                    <th width="8%">Order Number</th>
                                    <th width="14%">Customer Name</th>
                                    <th width="16%">Order Date</th>
                                    <th width="16%">Update Date</th>
                                    <th width="10%">Total</th>
                                    <th width="15%">Status</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td width="30">
                                        <input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" />
                                    </td>
                                    <td>
                                        #{{ str_pad($order->order_number,7,'0',0) }}
                                    </td>
                                    <td>
                                        {{ $order->user->name }}
                                    </td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>{{ $order->updated_at }}</td>
                                    <td>₺{{ $order->total_price }}</td>
                                    <td>
                                        <span>{{ $order->status->name }}</span>
                                    </td>
                                    <td>
                                        <a href=""><i class="fas fa-print"></i></a>
                                        <a href="{{ route('admin.orders.show', ['number' => $order->order_number]) }}"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="" class="delete-row"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr class="solid mt-1 opacity-4">
                        <div class="datatable-footer">
                            <div class="row align-items-center justify-content-between mt-3">
                                <div class="col-md-auto order-1 mb-3 mb-lg-0">
                                    <div class="d-flex align-items-stretch">
                                        <div class="d-grid gap-3 d-md-flex justify-content-md-end me-4">
                                            <select class="form-control select-style-1 bulk-action" name="bulk-action" style="min-width: 170px;">
                                                <option value="" selected>Bulk Actions</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                            <a href="ecommerce-orders-detail.html" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-auto text-center order-3 order-lg-2">
                                    <div class="results-info-wrapper"></div>
                                </div>
                                <div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
                                    <div class="pagination-wrapper"></div>
                                </div>
                            </div>
                        </div>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end: page -->
@endsection
