<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="{{ request()->routeIs('admin.dashboard.index') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.dashboard')</span>
                        </a>
                    </li>
                    <li class="nav-group-label">Orders</li>
                    <li class="{{ request()->routeIs('admin.orders.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.orders.list') }}">
                            <i class="bx bx-category-alt" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.orders')</span>
                        </a>
                    </li>
{{--                    <li class="">--}}
{{--                        <a class="nav-link" href="">--}}
{{--                            <i class="bx bx-category-alt" aria-hidden="true"></i>--}}
{{--                            <span>Payment Errors</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-group-label">@lang('dashboard.static.products')</li>
{{--                    <li class="nav-parent {{ request()->routeIs('admin.products.products.*') ? 'nav-expanded nav-active' : '' }}">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <i class="bx bx-unite" aria-hidden="true"></i>--}}
{{--                            <span>Product</span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-children">--}}
{{--                            <li class="{{ request()->routeIs('admin.products.products.list') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{ route('admin.products.products.list') }}">--}}
{{--                                    - Products List--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-products-form.html">--}}
{{--                                    - Products Form--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-category-list.html">--}}
{{--                                    - Categories List--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-category-form.html">--}}
{{--                                    - Category Form--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-coupons-list.html">--}}
{{--                                    - Coupons List--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-coupons-form.html">--}}
{{--                                    - Coupons Form--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-orders-list.html">--}}
{{--                                    - Orders List--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-orders-detail.html">--}}
{{--                                    - Orders Detail--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-customers-list.html">--}}
{{--                                    - Customers List--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="nav-link" href="ecommerce-customers-form.html">--}}
{{--                                    - Customers Form--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="{{ request()->routeIs('admin.product.products.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.product.products.list') }}">
                            <i class="bx bx-unite" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.products')</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.product.categories.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.product.categories.list') }}">
                            <i class="bx bx-category-alt" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.categories')</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.product.brands.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.product.brands.list') }}">
                            <i class="bx bxs-component" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.brands')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bxs-message-alt-dots" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.comments')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bxs-star-half" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.reviews')</span>
                        </a>
                    </li>
{{--                    <li class="{{ request()->routeIs('admin.products.brands.list') ? 'nav-active' : '' }}">--}}
{{--                        <a class="nav-link disabled" href="{{ route('admin.products.brands.list') }}">--}}
{{--                            <i class="bx bx-collection disabled" aria-hidden="true"></i>--}}
{{--                            <span>Variants<em class="not-included">(Coming soon)</em></span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-group-label">@lang('dashboard.static.users')</li>
                    <li class="{{ request()->routeIs('admin.users.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('admin.users.list')}}">
                            <i class="bx bx-user" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.users')</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.users.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="">
                            <i class="bx bx-envelope" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.bulk_mail')</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.users.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="">
                            <i class="bx bx-podcast" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.advices')</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.users.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="">
                            <i class="bx bx-cabinet" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.newsletter')</span>
                        </a>
                    </li>

{{--                    <li class="nav-group-label">Cargo</li>--}}

                    <li class="nav-group-label">@lang('dashboard.static.campaign')</li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bxs-discount" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.campaign')</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="">
                                <a class="nav-link" href="">
                                    - Product Campaign
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - Cart Campaign
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - Category Campaign
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - Brand Campaign
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bx-code-block" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.campaign_code')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bxs-package" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.cargo_campaign')</span>
                        </a>
                    </li>
                    <li class="nav-group-label">@lang('dashboard.static.integrations')</li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-export" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.export_import')</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="">
                                <a class="nav-link" href="">
                                    - Excel Export/Import
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - XML Export/Import
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bxs-store-alt" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.marketplaces')</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="">
                                <a class="nav-link" href="">
                                    - N11
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - Hepsiburada
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - Trendyol
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bxs-spreadsheet" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.e_invoices')</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="">
                                <a class="nav-link" href="">
                                    - Parasut
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - BizimHesap
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="">
                                    - BirFatura
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-group-label">@lang('dashboard.static.statics')</li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bxs-report" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.sales_reports')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bxs-bar-chart-alt-2" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.products_reports')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bxs-user-detail" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.users_reports')</span>
                        </a>
                    </li>
                    <li class="nav-group-label">@lang('dashboard.static.drop_shipping')</li>
                    <li class="disabled">
                        <a class="nav-link disabled" href="">
                            <i class="bx bx-dumbbell" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.coming_soon')</span>
                        </a>
                    </li>
                    <li class="nav-group-label">@lang('dashboard.static.contents')</li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bx-book-content" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.pages')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bxl-blogger" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.blogs')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bx-film" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.graphics')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bx-receipt" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.ads')</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="bx bx-slideshow" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.slides')</span>
                        </a>
                    </li>
                    <li class="nav-group-label">@lang('dashboard.static.settings')</li>
                    <li class="{{ request()->routeIs('admin.settings.company.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('admin.settings.company.setting')}}">
                            <i class="bx bx-building" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.company_description')</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.settings.cargos.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('admin.settings.cargos.list')}}">
                            <i class="bx bxs-truck" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.cargos')</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.settings.seo.*') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('admin.settings.seo.setting')}}">
                            <i class="bx bx-space-bar" aria-hidden="true"></i>
                            <span>@lang('dashboard.static.seo')</span>
                        </a>
                    </li>
                </ul>
            </nav>

{{--            <hr class="separator" />--}}

{{--            <div class="sidebar-widget widget-tasks">--}}
{{--                <div class="widget-header">--}}
{{--                    <h6>Projects</h6>--}}
{{--                </div>--}}
{{--                <div class="widget-content">--}}
{{--                    <ul class="list-unstyled m-0">--}}
{{--                        <li><a href="#">Porto HTML5 Template</a></li>--}}
{{--                        <li><a href="#">Tucson Template</a></li>--}}
{{--                        <li><a href="#">Porto Admin</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>

    </div>

</aside>
<!-- end: sidebar -->
