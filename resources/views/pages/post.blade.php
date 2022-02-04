@extends('layouts.template')

@section('title')
single
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
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="{{ asset('images/post/' . $post->image) }}"
                        style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="{{ route('guest.categories', $post->category) }}">{{
                                $post->category->title }}</a>
                            <a class="text-body" href="" style="text-decoration: none;">{{
                                $post->created_at->diffForHumans() }}</a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $post->title }}</h1>
                        <p>{!! $post->content !!}</p>
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
                            <a href="{{route ('guest.author', $post->post_author->id) }}" class="h4">
                                <small>{{$post->post_author->name}}</small></a>
                        </div>

                    </div>
                </div>
                <!-- News Detail End -->

                <!-- Comment List Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        <div class="media mb-4">
                            <img src="../img/user.jpg" alt="Image" class="{{ asset('img-fluid mr-3 mt-1') }}"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan
                                            2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                </p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="../img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan
                                            2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                </p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="../img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01
                                                    Jan 2045</i></small></h6>
                                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                            labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                            eirmod ipsum.</p>
                                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        <form>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Comment Form End -->
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