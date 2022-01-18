@extends('cms.layouts.template')

@section('title')
Edit Category
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('category.update', $category->slug) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control  @error('title') is-invalid @enderror"
                                        id="title" placeholder="Enter New Category" name="title" required
                                        value="{{ old('title') ?? $category->title }}">

                                    @error('title')
                                    {{ $message }}

                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=" card-footer">
                                <button type="submit" class="btn btn-primary">Edit Category</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection