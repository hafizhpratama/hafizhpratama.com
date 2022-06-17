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
                <h1 class="display-4">Create a New Post</h1>
                <p>Fill and submit this form to create a post</p>

                <hr>

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">Post Title</label>
                            <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="image">Post image</label>
                            <input type="file" name="image" class="form-control" placeholder="Post Title">
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="content">Post content</label>
                            <textarea id="summernote" class="form-control" name="content" placeholder="Enter Post content" rows="" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary btn-block">
                                Create Post
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