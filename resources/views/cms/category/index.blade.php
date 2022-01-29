@extends('cms.layouts.template')

@section('title')
Category
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
                            <a class="btn btn-primary" href="{{ route('category.create') }}" role="button">Create New
                                Category</a>

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
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            {{ $loop->index +1 }}
                                        </td>

                                        <td>
                                            {{$category->title}}
                                        </td>

                                        <td>
                                            {{$category->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <a class="btn btn-warning"
                                                href="{{ route('category.edit', $category->slug) }}"
                                                role="button">Edit</a>
                                            <a class="btn btn-danger" href="#" role="button" onclick="event.preventDefault();document.getElementById('form-delete-{{ $category->slug
                                            }}').submit();">Delete</a>

                                            <form action="{{ route('category.destroy', $category->slug) }}"
                                                method="post" id="form-delete-{{ $category ->slug }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $categories->links() }}
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