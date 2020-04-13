@extends('layouts.app')

@section('content')

   <h1>Create Posts</h1>
        {!!Form::open(['action' =>'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data'])!!}

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title','', ['class'=>'form-control', 'placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['class'=>'form-control', 'placeholder'=>"Enter Your Post Here"])}}
            </div>
            
            <!-- This section is specially for file upload to our post -->
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>


                {{Form::Submit('Submit',['class'=>'btn btn-primary'])}}

        {!!Form::close()!!}


@endsection