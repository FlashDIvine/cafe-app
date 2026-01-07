<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link text-center">
        <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                role="menu">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                       class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Category -->
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}"
                       class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Category</p>
                    </a>
                </li>

                <!-- Menu Cafe -->
                <li class="nav-item">
                    <a href="{{ route('menus.index') }}"
                       class="nav-link {{ request()->routeIs('menus.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>Menu Cafe</p>
                    </a>
                </li>

                <li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>User</p>
    </a>
</li>


            </ul>
        </nav>
    </div>
</aside>
