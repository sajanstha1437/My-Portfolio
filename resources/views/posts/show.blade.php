@extends('layouts.app')

@section('content')

    <a href="/home" class="btn btn-default"> Go back</a>
    <div class="row">
        <div class="col-md-4">
            <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <br/>
            <small>Written on {{$post->created_at}}</small>
        </div>
    </div>

    
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)

            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                
                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
            
                {{Form::hidden('_method','DELETE')}}
                {{Form::Submit('Delete', ['class'=>"btn btn-danger"])}}
            {!!Form::close()!!}
            
        @endif

    @endif

@endsection