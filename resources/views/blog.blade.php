@extends('layouts.main')
@section('content')
<h1 class="pb-3 fw-bold h3-font pt-5">Blog</h1>
<div class="row row-cols-1 row-cols-md-3">
    @forelse($posts as $post)
    <div class="col">
        <div class="card mb-4">
            <img src="{{ Storage::url($post->image) }}" class="card-img-top border-radius-1" alt="Image Blog" />
            <div class="card-body">
                <a class="text-dark" style="text-decoration: none" href="/blog/{{$post->url}}"><h4 class="card-title fw-bold" style="font-size: 18px">
                    {{ ucfirst($post->title) }}
                </h4>
                </a>
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
    @empty
    <p class="text-warning">No blog Posts available</p>
    @endforelse
</div>
<div class="mt-5">
    {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
@endsection