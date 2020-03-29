<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/admin/home') }}" class="brand-link">
        <!--<img src=" {{ asset('img/admin/AdminLTELogo.png') }}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">-->
        <span class="brand-text font-weight-light">BLOG LARAVEL</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link"><i class="far fa-user nav-icon"></i> <p>Usuarios</p></a></li>
                <li class="nav-item"><a href="{{ route('admin.categories.index') }}" class="nav-link"><i class="fa fa-sitemap nav-icon"></i> <p>Categorías</p></a></li>
                <li class="nav-item"><a href="{{ route('admin.tags.index') }}" class="nav-link"><i class="fa fa-tags nav-icon"></i> <p>Tags</p></a></li>
                <li class="nav-item"><a href="{{ route('admin.articles.index') }}" class="nav-link"><i class="fas fa-newspaper"></i> <p>Artículos</p></a></li>
                <li class="nav-item"><a href="{{ route('admin.images.index') }}" class="nav-link"><i class="fas fa-images"></i> <p>Imagenes</p></a></li>
            </ul>
        </nav>
    </div>
</aside>
