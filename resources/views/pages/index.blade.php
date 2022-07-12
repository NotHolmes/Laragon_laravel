@extends('layouts.main')

@section('content')
    <h1> List of all pages </h1>

    @for($i = 1; $i <= 10; $i++)
        <div>
            <a href="{{url("/pages/{$i}")}}"> page {{$i}} </a>
        </div>
    @endfor
@endsection