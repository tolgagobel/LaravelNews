@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>404</h1>
            <h2>The page you are looking for could not be found.</h2>
            <a href="{{ route('main') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>≈
@endsection
