@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/dashboard">
                <button class="btn btn-primary" type="button">
                    Go back
                </button>
            </a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">Edit Post</h1>
                <p>Edit and submit this form to update a post</p>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">Post Title</label>
                            <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" value="{{ $post->title }}" required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="image">Post image</label>
                            <input type="file" name="image" class="form-control" placeholder="image">
                            <img class="mt-4" src="{{ Storage::url($post->image) }}" width="200" alt="" />
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="content">Post content</label>
                            <textarea class="form-control" name="content" id="summernote">{{ $post->content }}</textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary btn-block">
                                Update Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
@endsection