@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Posts</div>
                @foreach ($posts as $post)
                    <div class="card-body">
                        <div class="card" style="width: 100%;">
                        <div class="card-body">
                        <h2 href="#" class="btn btn-primary">{{optional($post->company)->title??$post->user->name}}</h2>
                            <br>
                            <small>{{$post->updated_at}}</small>
                            <br>
                            <h1 class="card-title">{{$post->title}}</h1>
                            <div class="alert alert-primary" role="alert">
                            {{$post->content}}
                            </div>                            
                            <br>
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary active" aria-current="page">{{$post->category->name}}</a>
                                @foreach ($post->tags as $tag)
                                    <a href="#" class="btn btn-secondary">{{$tag->tag}}</a>
                                @endforeach
                            </div>
                            <br>
                            <br>
                            <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-primary">Edit Post</a>
                        </div>
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
