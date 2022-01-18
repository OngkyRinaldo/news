@extends('cms.layouts.template')

@section('title')
Post
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="{{ route('post.create') }}" role="button">Create New
                                Post</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)

                                    <tr>
                                        <td>
                                            {{ $loop->index +1 }}
                                        </td>
                                        <td>
                                            {{ $post->title }}
                                        </td>
                                        <td>
                                            {{ $post->category->title }}
                                        </td>
                                        <td>
                                            {{ $post->post_author->name }}
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('post.show', $post->slug) }}"
                                                role="button">Show</a>
                                            <a class="btn btn-warning" href="{{ route('post.edit', $post->slug) }}"
                                                role="button">Edit</a>
                                            <a class="btn btn-danger" href="#" role="button" onclick="event.preventDefault();document.getElementById('form-delete-{{ $post->slug
                                            }}').submit();">Delete</a>

                                            <form action="{{ route('post.destroy', $post->slug) }}" method="post"
                                                id="form-delete-{{ $post ->slug }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                            {{ $posts->links() }}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection