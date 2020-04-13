@extends('layouts.app')

@section('content')
        <h1> {{$title}}</h1>
        <p> We provide following services:</p>
        @if(count($services)>0)
            @foreach($services as $service)
              
                <li>{{$service}}</li>

            @endforeach
        @endif
@endsection