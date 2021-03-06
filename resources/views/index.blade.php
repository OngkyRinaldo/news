@extends('layouts.template')

@section('title')
Home
@endsection

@section('content')

{{-- main start --}}

<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                @foreach ($posts as $post)
                <div class="position-relative overflow-hidden" style="height: 500px">
                    <img class="img-fluid h-100" src="{{ asset('images/post/' . $post->image) }}"
                        style="object-fit: cover" />
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="{{ route('guest.categories', $post->category) }}">{{
                                $post->category->title }}</a>
                            <a class="text-white" style="text-decoration:none;">{{ $post->created_at->diffForHumans()
                                }}</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold"
                            href="{{ route('guest.post', [$post->category, $post]) }}">{{ $post->title }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                @foreach ($posts as $post)
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px">
                        <img class="img-fluid w-100 h-100" src="{{ asset('images/post/' . $post->image) }}"
                            style="object-fit: cover" />
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="{{ route('guest.categories', $post->category) }}">{{
                                    $post->category->title }}</a>
                                <a class="text-white" style="text-decoration: none;"><small>{{
                                        $post->created_at->diffForHumans()
                                        }}</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                href="{{ route('guest.post', [$post->category, $post]) }}">{{ $post->title
                                }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->

<!-- Breaking News Start -->
<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px">
                        Breaking News
                    </div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                        style="width: calc(100% - 170px);padding-right: 90px;">
                        @foreach ($posts as $post)
                        <div class="text-truncate">
                            <a class="text-white text-uppercase font-weight-semi-bold"
                                href="{{ route('guest.post', [$post->category, $post]) }}">{{ $post->title }}</a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News End -->

<!-- Featured News Slider Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">
                Featured News
            </h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            @foreach ($posts as $post)
            <div class="position-relative overflow-hidden" style="height: 300px">
                <img class="img-fluid h-100" src="{{ asset('images/post/' . $post->image) }}"
                    style="object-fit: cover" />
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="{{ route('guest.categories', $post->category) }}">{{
                            $post->category->title }}</a>
                        <a class="text-white" style="text-decoration:none;"><small>{{ $post->created_at->diffForHumans()
                                }}</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                        href="{{ route('guest.post', [$post->category, $post]) }}">{{ $post->title }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Featured News Slider End -->

<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">
                                Latest News
                            </h4>
                            <a class="text-secondary font-weight-medium text-decoration-none"
                                href="{{ route('guest.all-post') }}">View All</a>
                        </div>
                    </div>
                    @foreach ($posts as $post)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('images/post/' . $post->image) }}"
                                style="object-fit: cover; height:300px" />
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{ route('guest.categories', $post->category) }}">{{
                                        $post->category->title
                                        }}</a>
                                    <a class="text-body" style="text-decoration: none;"><small>{{
                                            $post->created_at->diffForHumans()
                                            }}</small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                    href="{{ route('guest.post', [$post->category, $post]) }}"
                                    style="font-size: 18px; height:20px">{{
                                    $post->title }}</a>


                                <div class="m-n1">
                                    @foreach ($post->tags as $tag)
                                    <a href="{{ route('guest.tags', $tag) }}" class="btn btn-sm btn-secondary m-1 mt-3">
                                        {{ $tag->title }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle mr-2"
                                        src="{{ asset('images/users/' . $post->post_author->image) }}" width=" 25"
                                        height="25" alt="" />
                                    <a href="{{route ('guest.author', $post->post_author->id) }}" class="h4"
                                        style="font-size: 20px">
                                        <small>{{$post->post_author->name}}</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4">

                <x-web.sidebar />

            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

{{-- main end --}}


@endsection