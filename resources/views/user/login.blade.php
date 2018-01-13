@extends('layouts.master')
@section('title')
    KappaBook Login
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
            <h1>Login</h1>
            <p>Manage your account and see your orders</p>
            <br><br>
           
            
            
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
            <form action="{{ route('login') }}" method="post">
                    <a href="{{url('/redirect')}}">
                        <button type="button" class="btn btn-default btn-md" style="min-width: 365px; background-color: #00aced; color: white; border:0 ;"><span class="fa fa-twitter"></span>&nbsp; &nbsp;Login with Twitter</button>
                    </a> <br>
                    <a href="{{url('/redirect')}}">
                        <button type="button" class="btn btn-default btn-md" style="min-width: 365px; background-color: #3b5998; color: white; border:0 ;"><span class="fa fa-facebook"></span>&nbsp; &nbsp;Login with Facebook</button>
                    </a>
                        <hr>
                <div class="form-group">   
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-mail *">
                </div>
                 <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password *">
                </div>
               <div class="checkbox">
                <label><input type="checkbox" value="">Remember me</label>
                </div>
                <button type="submit" class="btn btn-success" style="width: 100px;">Login</button>
                
                <p class="pull-right">Lost your password?</p>
                
                {{ csrf_field() }}

                <br><br>
                <p>Don't have an account? <a href="{{ route('user.signup') }}">Create one now!</a>
                
            </form>
        </div>
    </div>
    </div>

@include('layouts.footer');

@endsection

