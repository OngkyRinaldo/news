@extends('cms.layouts.template')

@section('title')
Edit Account
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
                            <h3 class="card-title">Edit Account</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('user.update', $auth->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                        id="name" placeholder="Enter New Name" name="name" required
                                        value="{{ old('name') ?? $auth->name }}">

                                    @error('name')
                                    {{ $message }}

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    @if ($auth->image)
                                    <img src="{{ asset('images/users/' . $auth->image) }}"
                                        class="img-preview img-fluid md-3 col-sm-5 d-block">
                                    @else
                                    <img class="img-preview img-fluid md-3 col-sm-5 ">
                                    @endif
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror"
                                        id="image" name="image" onchange="previewImage()">
                                    <input type="hidden" name="oldImage" value="{{ $auth->image }}">

                                    @error('image')
                                    {{ $message }}

                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=" card-footer">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
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

@section('script')
<script>
    function previewImage()
{
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = function(oFREvent)
    {
        imgPreview.src = oFREvent.target.result;
    }
}
</script>
@endsection