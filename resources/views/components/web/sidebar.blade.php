<!-- Ads Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">
            Advertisement
        </h4>
    </div>
    <div class="bg-white text-center border border-top-0 p-3">
        <a href=""><img class="img-fluid" src="{{ asset('img/news-800x500-2.jpg') }}" alt="" /></a>
    </div>
</div>
<!-- Ads End -->

<!-- Latest News Start -->

<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet
                    elit...</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet
                    elit...</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet
                    elit...</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet
                    elit...</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet
                    elit...</a>
            </div>
        </div>
    </div>
</div>
<!-- Popular News End -->

<!-- Newsletter Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">
            Newsletter
        </h4>
    </div>
    <div class="bg-white text-center border border-top-0 p-3">
        <p>
            Aliqu justo et labore at eirmod justo sea
            erat diam dolor diam vero kasd
        </p>
        <div class="input-group mb-2" style="width: 100%">
            <input type="text" class="form-control form-control-lg" placeholder="Your Email" />
            <div class="input-group-append">
                <button class="btn btn-primary font-weight-bold px-3">
                    Sign Up
                </button>
            </div>
        </div>
        <small>Lorem ipsum dolor sit amet elit</small>
    </div>
</div>
<!-- Newsletter End -->

<!-- Tags Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">
            Tags
        </h4>
        <a class="text-secondary font-weight-medium text-decoration-none" href="{{ route('guest.all-tag') }}">View
            All</a>
    </div>
    <div class="bg-white border border-top-0 p-3">
        @foreach ($tags as $tag)
        <div class="d-flex flex-wrap m-n1">
            <a href="{{ route('guest.tags', $tag) }}" class="btn btn-sm btn-outline-secondary m-1">{{ $tag->title }}</a>
        </div>
        @endforeach

    </div>
</div>

<!-- Tags End -->