@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="mt-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/blog/create/post">
                                <button class="btn btn-primary" type="button">
                                    Create
                                </button>
                            </a>
                        </div>
                    </div>

                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ ucfirst($post->title) }}</td>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <a href="/blog/{{ $post->url }}" target="_blank">
                                            <button  class="btn btn-success mr-2" type="button">
                                            View
                                            </button>
                                        </a>
                                        <a href="/blog/{{ $post->id }}/edit">
                                            <button  class="btn btn-outline-primary mr-2" type="button">
                                            Edit
                                            </button>
                                        </a>
                                        <form id="delete-frm" class="" action="/dashboard/{{ $post->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection