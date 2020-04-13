@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{auth()->user()->name}}!!!<br/>
                    <a href="{{url('/posts/create')}}" class="btn btn-primary">Create New Post</a>

                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Operations</th>
                            
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <th><a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
                            <th>                      
                               
                                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::Submit('Delete', ['class'=>"btn btn-danger"])}}
                                {!!Form::close()!!}

                               
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    
                    @else
                        <p>You do not have any posts.</p>
                        
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
