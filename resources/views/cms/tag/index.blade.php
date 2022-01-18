@extends('cms.layouts.template')

@section('title')
Tag
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="{{ route('tag.create') }}" role="button">Create
                                New Tag</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>Title</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                    <tr>
                                        <td>
                                            {{ $loop->index +1 }}
                                        </td>
                                        <td>
                                            {{$tag->title}}
                                        </td>
                                        <td>
                                            {{$tag->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('tag.edit', $tag->slug) }}"
                                                role="button">Edit</a>
                                            <a class="btn btn-danger" href="#" role="button" onclick="event.preventDefault();document.getElementById('form-delete-{{ $tag->slug
                                            }}').submit();">Delete</a>
                                        </td>

                                        <form action="{{ route('tag.destroy', $tag->slug) }}" method="post"
                                            id="form-delete-{{ $tag ->slug }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $tags->links() }}
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