@extends('layouts.template')

@section('title')
Author
@endsection

@section('content')

{{-- main start --}}
<!-- Breaking News Start -->

<div class="container-fluid mt-5 mb-3 pt-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <diva class="section-title border-right-0 mb-0" style="width: 180px;">
                        <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                    </diva>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                        style="width: calc(100% - 180px); padding-right: 100px;">
                        @foreach ($posts as $post)
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold"
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


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                @foreach ($posts as $post)
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="{{ asset('images/post/' . $post->image) }}"
                        style="object-fit: cover;height:226px">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="{{ route('guest.categories', $post->category) }}">{{
                                $post->category->title }}</a>
                            <a class="text-body" href="" style="text-decoration: none;">{{
                                $post->created_at->diffForHumans() }}</a>
                        </div>
                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                            href="{{ route('guest.post', [$post->category, $post]) }}">{{
                            $post->title }}</a>
                        <p>{!! $post->descriptions !!}</p>
                        <div class="m-n1">
                            @foreach ($post->tags as $tag)
                            <a href="#" class="btn btn-sm btn-secondary m-1">
                                {{ $tag->title }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle mr-2"
                                src="{{ asset('images/users/' . $post->post_author->image) }}" width="25" height="25"
                                alt="">
                            <span>{{ $post->post_author->name }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $posts->links() }}

                <!-- News Detail End -->
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