<!-- .aside-menu -->
<div class="aside-menu overflow-hidden">
    <!-- .stacked-menu -->
    <nav id="stacked-menu" class="stacked-menu">
        <!-- .menu -->
        <ul class="menu">
        <!-- .menu-item -->
        <li class="menu-item has-active">
            @if(Auth::user()->roles == 'ADMIN')
            <a href="{{ URL('/admin') }}" class="menu-link">
                <span class="menu-icon fas fa-home"></span>
                <span class="menu-text">Dashboard</span>
            </a>
            @else
            <a href="{{ URL('/user') }}" class="menu-link">
                <span class="menu-icon fas fa-home"></span>
                <span class="menu-text">Dashboard</span>
            </a>
            @endif
        </li><!-- /.menu-item -->
        <!-- .menu-item -->
        @if(Auth::user()->roles == 'ADMIN')
        <li class="menu-item has-child">
            <a href="{{ route('view.trouble_ticket') }}" class="menu-link"><span class="menu-icon oi oi-list"></span> <span class="menu-text">Trouble Ticket</span></a> <!-- child menu -->
        </li><!-- /.menu-item -->
        <!-- .menu-item -->
        <li class="menu-item has-child">
            <a href="{{ route('view.type') }}" class="menu-link"><span class="menu-icon oi oi-document"></span> <span class="menu-text">Type Trouble</span></a> <!-- child menu -->
        </li><!-- /.menu-item -->
        <!-- .menu-item -->
        <li class="menu-item has-child">
            <a href="{{ route('view.user') }}" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">User</span></a> <!-- child menu -->
        </li><!-- /.menu-item -->
        @endif
    </nav><!-- /.stacked-menu -->
</div><!-- /.aside-menu -->