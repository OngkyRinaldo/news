@extends('cms.layouts.template')

@section('title')
Show Post
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-sm-12">
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="../images/post/{{ $post->image }}" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="mb-3 text-secondary text-uppercase font-weight-bold"
                                    href="{{ route('guest.categories', $post->category) }}">{{
                                    $post->category->title }}</a>
                                <span class="text-body">{{ $post->created_at->diffForHumans() }}</span>
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
                                <img class="rounded-circle mr-2" src="../img/user.jpg" width="25" height="25" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection