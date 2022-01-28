@extends('cms.layouts.template')

@section('title')
Edit Post
@endsection

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}" />
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}" />
{{-- ckeditor --}}
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
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
                            <h3 class="card-title">Edit Post</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('post.update', $post->slug) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" placeholder="Enter New Post Title" name="title" required
                                        value="{{ old('title') ?? $post->title }}">

                                    @error('title')
                                    {{ $message }}

                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="descriptions">Descriptions</label>
                                    <textarea class="form-control @error('descriptions') is-invalid @enderror"
                                        name="descriptions" id="descriptions" cols="30" rows="5"
                                        required>{{ old('descriptions') ?? $post->descriptions }}</textarea>

                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content"
                                        id="content" cols="30" rows="10">{{ $post->content }}</textarea>

                                    @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <select class="form-control" multiple="multiple" data-placeholder="Select a Tag"
                                        style="width: 100%" id="tag" name="tags[]">

                                        @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}" @if (in_array($tag->id, $post_tagIDS))
                                            selected
                                            @endif>{{ $tag->title }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="images" class="form-label">images</label>
                                    @if ($post->image)
                                    <img src="{{ asset('images/post/' . $post->image) }}"
                                        class="img-preview img-fluid md-3 col-sm-5 d-block">
                                    @else
                                    <img class="img-preview img-fluid md-3 col-sm-5 ">
                                    @endif
                                    <input type="file" class="form-control" id="image" name="image"
                                        onchange="previewImage()">
                                    <input type="hidden" name="oldImage" value="{{ $post->image }}">



                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Post</button>
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
<!-- select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('#tag').select2();
        CKEDITOR.replace('content');
    
       
        });

        {{-- preview image --}}

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