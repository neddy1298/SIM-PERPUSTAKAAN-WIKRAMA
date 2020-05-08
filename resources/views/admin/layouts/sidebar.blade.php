<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand pt-4" href="{{ url('admin/dashboard') }}">
            <!-- <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
            <h1>PERPUSTAKAAN</h1>
        </a>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link {{ ($page == 'Dashboard') ? 'active text-red' : '' }}"
                       href="{{url('admin/dashboard')}}">
                        <i class="ni ni-tv-2 text-warning "></i> Dashboard
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($page == 'E-Book' || $page == 'E-Tube') ? 'active text-primary' : '' }}"
                       data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                       aria-controls="collapseExample">
                        <i class="ni ni-ungroup text-purple "></i> Master Data
                    </a>
                    <div class="collapse show" class="collapse" id="collapseExample" style="padding-left: 10px;"
                         id="ui-basic"
                         aria-expanded="true">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item ">
                                <a class="nav-link {{ ($page == 'E-Book') ? 'active text-green' : '' }}"
                                   href="{{url('admin/ebook')}}"><i class="fas fa-book text-green"></i>E-Book</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ ($page == 'E-Tube') ? 'active text-red' : '' }}"
                                   href="{{url('admin/etube')}}"><i
                                        class="fab fa-youtube text-red"></i>E-Tube</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($page == 'Artikel') ? 'active text-yellow' : '' }}"
                       href="{{url('admin/artikel')}}">
                        <i class="far fa-edit text-yellow"></i> Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <hr>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($page == 'Kategori') ? 'active text-blue' : '' }}"
                       href="{{ route('kategori') }}">
                        <i class="ni ni-bullet-list-67 text-blue"></i> Kategori
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($page == 'Email') ? 'active text-pink' : '' }}" href="{{ route('email') }}">
                        <i class="far fa-envelope-open text-pink"></i> Email
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($page == 'Users') ? 'active text-info' : '' }}" href="{{route('users')}}">
                        <i class="fas fa-users text-info"></i> Users
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($page == 'Akun') ? 'active text-yellow' : '' }}" href="{{route('akun')}}">
                        <i class="far fa-user text-yellow"></i> My Profile
                    </a>
                </li>
            </ul>
            <!-- Divider -->

        </div>
    </div>
</nav>
