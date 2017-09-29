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
                    
        <form action="{{ route('user.update') }}" method="post">
             <div class="checkbox">
                <input type="radio" name="sex" id="sex" value="Mr"> Mr.</input>
                <label>
                <input type="radio" name="sex" id="sex" value="Mrs"> Mrs.</input>
                </label>
            </div>
                <div class="form-group">
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname">
                </div>
                <div class="form-group">
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname">
                </div>
                <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                        <input type="text" id="adress" name="adress" class="form-control" placeholder="Adress">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>

              <button type="submit" class="btn btn-success pull-right">Modify</button>
               {{ csrf_field() }}
         </form>
              <a href="{{ route('user.profile') }}"><button type="submit" class="btn btn-success pull-left">Back</button>
            <br>
          
                </div>
            </div>
        </div>
           
    </div>
@endsection
