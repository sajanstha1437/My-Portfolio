@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    @if(count($posts)>0)
       
            <div class="card">
               <ul class="list-group list-group-flush">
                 @foreach($posts as $post)

                 <div class="card" style="width: 18rem;">
                    <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a> 
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
                    </div>
                </div>
                 <!--  
                        <li class="list-group-item">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a>  </h3>
                            <small>Written on {{$post->created_at}}</small>
                        </li>

                        @if(!Auth::guest())
                            @if(Auth::user()->id == $post->user_id)
                            <li class="list-group-item">
                                                     <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                                    
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::Submit('Delete', ['class'=>"btn btn-danger"])}}
                                {!!Form::close()!!}
                            
                            </li>
                            @endif

                        @endif
                    -->
                       
                    @endforeach
                
                </ul>
            </div>
        
    @else

    @endif

@endsection