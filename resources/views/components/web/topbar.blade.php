<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center bg-dark px-lg-5">
        <div class="col-lg-9">
        </div>
        <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-auto mr-n2">
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">{{ date('D, d F Y')}}</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-body small" href="{{ route('home') }}" target="_blank">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('index') }}" class="nav-link text-body small">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body small" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </nav>
        </div>
    </div>
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="{{ route('guest.index') }}" class="navbar-brand p-0 d-none d-lg-block">
                <h1 class="m-0 display-4 text-uppercase text-primary">
                    Biz<span class="text-secondary font-weight-normal">News</span>
                </h1>
            </a>
        </div>
    </div>
</div>