<!-- Ads Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
    </div>
    <div class="bg-white text-center border border-top-0 p-3">
        <a href=""><img class="img-fluid" src="{{ asset('img/news-800x500-2.jpg') }}" alt="" /></a>
    </div>
</div>
<!-- Ads End -->

<!-- Latest News Start -->

<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold" style="font-size: 18px">Tranding News</h4>
    </div>
    <div class="bg-white border border-top-0 p-3 ">
        @foreach ($latests as $latest)
        <div class="d align-items-center bg-white mb-3" style="position: relative; ">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0 mt-2">
                <div class="mb-2">
                    <img class="img-fluid" src="{{ asset('images/post/' . $latest->image) }}"
                        style="height:110px;   width: 100%;" />
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 mt-2"
                        href="{{ route('guest.categories', $latest->category) }}">{{
                        $latest->category->title }}</a>
                    <a class="text-body" style="text-decoration: none"><small>{{
                            $latest->created_at->diffForHumans()
                            }}</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                    href="{{ route('guest.post', [$latest->category, $latest]) }}" style="font-size: 15px">{{
                    $latest->title
                    }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Popular News End -->

<!-- Tags Start -->


<!-- Tags End -->