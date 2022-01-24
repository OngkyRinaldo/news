<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('guest.index') }}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                Account
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="{{ route('user.index') }}" class="dropdown-item">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Setting Account
                            </h3>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('changePasswordGet') }}" class="dropdown-item">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Change Password
                            </h3>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                SignOut
                            </h3>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Account End -->
            </a>
            </div>
        </li>
        </div>
    </ul>
</nav>
<!-- /.navbar -->