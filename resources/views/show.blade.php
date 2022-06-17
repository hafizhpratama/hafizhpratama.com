@extends('layouts.main')
@section('content')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb pt-5 ">
    <li class="breadcrumb-item"><a style="text-decoration: none; color: grey;" href="/">Home</a></li>
    <li class="breadcrumb-item active text-dark" aria-current="page"><b>Blog</b></li>
  </ol>
</nav>
<div class="row align-items-center">
  <div class="col-lg-12 col-sm-12">
    <h1 class="fw-bold h1-font">
      {!! $post->title !!}
    </h1>
  </div>
  <div class="col-lg-6 col-sm-6 mt-4">
    <img style="width: 24px" class="rounded-circle float-start" src="{{ asset('images/photo-profile.jpg') }}" alt="Photo Profile" />
    <p style="font-size: 16px; margin-left: 36px">
      Hafizh Pratama / {!! $created_at !!}
    </p>
  </div>
  <div class="col-lg-12 col-sm-12 mt-4">
    <img style="width: 100%;" src="{{ Storage::url($post->image) }}" class="img-fluid rounded" alt="Image Blog" />
    <div class="mt-4" style="font-size: 16px">
      {!! $post->content !!}
    </div>
  </div>
</div>
@endsection