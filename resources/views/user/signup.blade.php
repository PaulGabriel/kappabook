@extends('layouts.master')
@section('content')
<div class="row">
      <div class="col-md-6 col-md-offset-3">
            <h1>Register</h1>
            <p>Create a new account to place orders</p>

            <br><br>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
            <form action="{{ route('user.signup') }}" method="post">
             <div class="checkbox">
                <input type="radio" name="sex" id="sex" value="Mr" required="required"> Mr.</input>
                <label>
                <input type="radio" name="sex" id="sex" value="Mrs" required="required"> Mrs.</input>
                </label>
            </div>
                <div class="form-group">
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname *">
                </div>
                <div class="form-group">
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname *">
                </div>
                <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-mail *">
                </div>
                
               <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password *">
                </div>
                <div class="checkbox">
                <label>
                <input type="checkbox" value="" required="required">I read <u>terms and conditions</u> and I accept them</input>
                </label> 
                </div>
                <button type="submit" class="btn btn-success" style="width: 100px;">Sign Up</button>
                {{ csrf_field() }}
                
            </form>
        </div>
    </div>
</div>
<br>
    @include('layouts.footer');
@endsection