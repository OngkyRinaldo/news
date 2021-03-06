<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="{{ route('guest.index') }}" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary">
                Biz<span class="text-white font-weight-normal">News</span>
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{ route('guest.index') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('guest.all-category') }}" class="nav-item nav-link">Category</a>
                <a href="{{ route('guest.all-tag') }}" class="nav-item nav-link">Tag</a>
            </div>
            <form action="{{ route('guest.search-post') }}">
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px">
                    <input type="text" class="form-control border-0" placeholder="Keyword" name="search"
                        value="{{ request('search') }}" />
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3" type="submit">
                            <i class="fa fa-search"></i>
                        </button>

                    </div>
            </form>
        </div>
</div>
</nav>
</div>