@extends('cms.layouts.template')

@section('title')
Edit Tag
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
                            <h3 class="card-title">Edit Tag</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('tag.update', $tag->slug) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Tag"
                                        name="title" required value="{{ old('title') ?? $tag->title }}"">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=" card-footer">
                                    <button type="submit" class="btn btn-primary">Edit Tag</button>
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