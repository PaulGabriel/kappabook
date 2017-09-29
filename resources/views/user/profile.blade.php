@extends('layouts.master')

@section('title')
    User Profile
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <h1>Hello, {{ Auth::user()->firstname }}, {{ Auth::user()->id}} </h1>
       
            </div>
    </div>
@endsection
