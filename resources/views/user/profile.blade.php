@extends('layouts.master')

@section('title')
    User Profile
@endsection

@section('content')
   
    <div class="col-lg-12">
        <div class="panel panel-default">
          <!-- Default panel contents -->
        <div class="panel-heading text-center"><h4>My Account</h4></div>
        <div class="panel-body">

            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Account informations</div>
                    <div class="panel-body">
                    <p class="pull-left">Mr or Ms </p>
                        <p class="text-center text-strong">{{ Auth::user()->sex }}</p>
                    <p class="pull-left">Firstname: </p>
                        <p class="text-center text-strong">{{ Auth::user()->firstname }}</p>
                    <p class="pull-left">Lastname: </p>
                        <p class="text-center text-strong">{{ Auth::user()->lastname }}</p>
                    <p class="pull-left">E-mail </p>
                        <p class="text-center text-strong">{{ Auth::user()->email }}</p>
                    <p class="pull-left">Phone</p>
                        <p class="text-center text-strong">{{ Auth::user()->phone}}</p>
                    <p class="pull-left">Adress</p>
                        <p class="text-center text-strong">{{ Auth::user()->adress }}</p>
            <br>
            <a href="{{ route('modify-profile') }}"><button type="button" class="btn btn-success pull-right">Modify</button></a>
                </div>
            </div>
        </div>
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">My orders</div>
                    <div class="panel-body">
                
            <button type="button" class="btn btn-success pull-right">All orders</button>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>
    <div class="col-md-6">  
        <div class="side-menu">
            <ul class="nav">
                <p style="background-color: blue;">My account</p>
                <li>My orders</li>
                <li>Tranzactions</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6"> 
         <p class="pull-left">Mr or Ms </p>
                        <p class="text-center text-strong">{{ Auth::user()->sex }}</p>
                    <p class="pull-left">Firstname: </p>
                        <p class="text-center text-strong">{{ Auth::user()->firstname }}</p>
                    <p class="pull-left">Lastname: </p>
                        <p class="text-center text-strong">{{ Auth::user()->lastname }}</p>
                    <p class="pull-left">E-mail </p>
                        <p class="text-center text-strong">{{ Auth::user()->email }}</p>
                    <p class="pull-left">Phone</p>
                        <p class="text-center text-strong">{{ Auth::user()->phone}}</p>
                    <p class="pull-left">Adress</p>
                        <p class="text-center text-strong">{{ Auth::user()->adress }}</p>
    </div>
@endsection
