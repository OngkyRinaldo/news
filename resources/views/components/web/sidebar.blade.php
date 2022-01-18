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
        <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        @foreach ($latests as $latest)
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">

            <div class="row w-100 h-100 px-3 border border-left-0 d-flex justify-content-center">
                <div class="col-4 p-0">
                    <img class="img-fluid" src="{{ asset('images/post/' . $latest->image) }}" alt=""
                        style="object-fit: cover; widht:100%; height:100%; ">
                </div>
                <div class="col-8">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{
                            $latest->category->title }}</a>
                        <a class="text-body" href="" style="text-decoration: none;"><small>{{
                                $latest->created_at->diffForHumans() }}</small></a>
                    </div>
                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ $latest->title }}</a>
                </div>

            </div>
        </div>
        @endforeach

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