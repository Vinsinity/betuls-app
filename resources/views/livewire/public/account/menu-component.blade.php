<div class="card p-3 h-100">
    <nav class="nav flex-column nav-pills">
        <a class="nav-link {{ request()->routeIs('account.profile') ? 'active' : '' }}" href="{{ route('account.profile') }}">Account</a>
        <a class="nav-link {{ request()->routeIs('account.orders.*') ? 'active' : '' }}" href="{{ route('account.orders.list') }}">Orders history</a>
        <a class="nav-link" href="#">My wishlist</a>
        <a class="nav-link" href="#">Transactions</a>
        <a class="nav-link" href="#">Profile setting</a>
        <a class="nav-link" href="#">Log out</a>
    </nav>
</div>
