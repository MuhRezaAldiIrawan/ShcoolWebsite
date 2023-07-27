<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mt-3 ml-3 align-content-center justify-content-center">
        <a href="index.html" class="app-brand-link ">
            
            <img src="{{ asset('images/logo.png ') }}" alt="Logo" width="40px">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu</span></li>
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Blog Post</span></li>

        <li class="menu-item {{ request()->is('post') ? 'active' : '' }}">
            <a href="/post" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-alt-add"></i>
                <div data-i18n="Analytics">Semua Postingan</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('addpost') ? 'active' : '' }}">
            <a href="/addpost" class="menu-link">
                <i class="menu-icon tf-icons bx bx-walk"></i>
                <div data-i18n="Analytics">Buat Postingan</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Informasi</span></li>

        {{-- <li class="menu-item {{ request()->is('kategori') ? 'active' : '' }}">
            <a href="/kategori" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Analytics">Kategori</div>
            </a>
        </li> --}}

        {{-- <li class="menu-item {{ request()->is('kategori') ? 'active' : '' }}">
            <a href="/kategori" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">profile</div>
            </a>
        </li> --}}
    </ul>
</aside>
