<div class="datatables-header-footer-wrapper">
    <div class="datatable-header">
        <div class="row align-items-center mb-3">

            <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                <a href="{{ route('admin.product.categories.add') }}" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Category</a>
            </div>

            <div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
                <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                    <label class="ws-nowrap me-3 mb-0">Filter By:</label>
                    <select class="form-control select-style-1 filter-by" name="filter-by">
                        <option value="all" selected>All</option>
                        <option value="1">ID</option>
                        <option value="2">Customer Name</option>
                        <option value="3">Date</option>
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
    <table class="table table-responsive-lg  table-striped table-sm mb-0">
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
{{--            <th>Create Date</th>--}}
            <th>Order</th>
            <th>Status</th>
            <th>Actions</th>

{{--            <th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>--}}
{{--            <th width="8%">ID</th>--}}
{{--            <th width="18%">Name</th>--}}
{{--            <th width="18%">Create Date</th>--}}
{{--            <th width="18%">Order</th>--}}
{{--            <th width="15%">Status</th>--}}
{{--            <th width="10%">Actions</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
                <td><strong>{{ $category->id }}</strong></td>
                <td><strong>{{ $category->name }}</strong></td>
{{--                <td>{{ $category->created_at }}</td>--}}
                <td>{{ $category->order }}</td>
                <td><span class="ecommerce-status {{ $category->status ? 'completed' : 'failed' }}">{{ $category->status ? 'Active' : 'Passive' }}</span></td>
                <td>
                    <a href="{{ route('admin.product.categories.show', ['slug' => $category->slug]) }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary"><i class="bx bx-pencil"></i></a>
                    <a class="mb-1 mt-1 me-1 modal-basic btn btn-default btn-danger" wire:click="deleteId({{ $category->id }})" href="#modalDelete"><i class="bx bx-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--    <table class="table table-ecommerce-simple table-borderless table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 640px;">--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>--}}
{{--            <th width="8%">ID</th>--}}
{{--            <th width="18%">Name</th>--}}
{{--            <th width="18%">Create Date</th>--}}
{{--            <th width="18%">Order</th>--}}
{{--            <th width="15%">Status</th>--}}
{{--            <th width="10%">Actions</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($categories as $category)--}}
{{--            <tr>--}}
{{--                <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>--}}
{{--                <td><strong>{{ $category->id }}</strong></td>--}}
{{--                <td><strong>{{ $category->name }}</strong></td>--}}
{{--                <td>{{ $category->created_at }}</td>--}}
{{--                <td>{{ $category->order }}</td>--}}
{{--                <td><span class="ecommerce-status {{ $category->status ? 'completed' : 'failed' }}">{{ $category->status ? 'Active' : 'Passive' }}</span></td>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('admin.product.categories.show', ['slug' => $category->slug]) }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary"><i class="bx bx-pencil"></i></a>--}}
{{--                    <a class="mb-1 mt-1 me-1 modal-basic btn btn-default btn-danger" wire:click="deleteId({{ $category->id }})" href="#modalDelete"><i class="bx bx-trash"></i></a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    <ul class="pagination mt-5">--}}
{{--        <li class="page-item"><a class="page-link" href="{{ $categories->previousPageUrl() }}">«</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--        <li class="page-item"><a class="page-link" href="{{ $categories->nextPageUrl() }}">»</a></li>--}}
{{--    </ul>--}}
{{--    {{ $categories->links() }}--}}
    <hr class="solid mt-5 opacity-4">
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
    <!-- Modal -->
    <div id="modalDelete" class="modal-block mfp-hide">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Are you sure?</h2>
            </header>
            <div class="card-body">
                <div class="modal-wrapper">
                    <div class="modal-text">
                        <p class="mb-0">Are you sure that you want to delete this category?</p>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-end">
                        <button class="btn btn-danger modal-confirm" wire:click="delete()">Delete</button>
                        <button class="btn btn-default modal-dismiss">Cancel</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>

</div>
