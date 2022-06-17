@extends('layouts.main')
@section('content')
<div class="row py-5 align-items-center">
  <div class="col-lg-6 col-sm-12 photo-profile-2">
    <img style="width: 80px" class="rounded-circle float-start mb-4" src="{{ asset('images/photo-profile.jpg') }}" alt="Photo Profile" />
  </div>
  <div class="col-lg-6 col-sm-12">
    <h1 class="fw-bold h1-font">Hafizh Pratama</h1>
    <h2 style="font-size: 16px">
      Software Engineer at <a style="text-decoration: none;" class="text-dark" target="_blank" href="https://www.sirclo.com/"><b>Icube By Sirclo</b></a>
    </h2>
    <p style="font-size: 16px">
      Helping people build a web. Teaching about web development,
      serverless, and backend.
    </p>
  </div>
  <div class="col-lg-6 col-sm-12">
    <img style="width: 176px" class="rounded-circle float-end photo-profile-1" src="{{ asset('images/photo-profile.jpg') }}" alt="Photo Profile" />
  </div>
</div>
<h3 class="pb-3 fw-bold h3-font">Featured Posts</h3>
<div class="row row-cols-1 row-cols-md-3 pb-5">
  @foreach($posts as $post)
  <div class="col mb-4">
    <div class="card">
      <img src="{{ Storage::url($post->image) }}" class="card-img-top border-radius-1" alt="Image Blog" />
      <div class="card-body">
        <a class="text-dark" style="text-decoration: none" href="/blog/{{$post->url}}"><h4 class="card-title fw-bold" style="font-size: 18px">
          {{$post->title}}
        </h4></a>
        <p class="card-text" style="font-size: 16px">
          <?php
          $string = strip_tags($post->content);
          if (strlen($string) > 160) {

            // truncate string
            $stringCut = substr($string, 0, 160);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '... <a style="color: rgb(235, 68, 50); text-decoration: none" href="/blog/' . $post->url . '">Read More</a>';
          }
          echo $string;
          ?>
        </p>
      </div>
    </div>
  </div>
  @endforeach
  <a class="pt-3 text-dark" style="font-size: 16px; text-decoration: none" href="/blog">Read all posts
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
    </svg>
  </a>
</div>
<div class="row">
  <div class="col-lg-12 col-sm-12">
    <div class="bd-callout bd-callout-info">
      <p style="font-size: 16px">
        Help people to create their best website. With my expertise and
        experience, I hope to be able to help you to develop your business
        even further. Or, If you want to learn about the world of Software
        Engineering, I will give you all the knowledge I have.
      </p>
      <p style="font-size: 16px">
        interested? please contact <a style="color: rgb(235, 68, 50);" href="hafizhpratama99@gmail.com">hafizhpratama99@gmail.com</a> for more details.
      </p>
    </div>
  </div>
</div>
@endsection