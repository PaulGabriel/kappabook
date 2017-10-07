@extends('layouts.master')

@section('title')
    User Profile
@endsection

@section('content')
   

      <div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://www.kirkleescollege.ac.uk/wp-content/uploads/2015/09/default-avatar.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{ Auth::user()->firstname }} {{ Auth::user()->lastname}}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->

				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li >
							<a href="{{ route('user.profile') }}">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li class="active">
							<a href="{{ route('user.update') }}">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-ok"></i>
							Orders</a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
                
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
          <br>
              <button type="submit" class="btn btn-default pull-right">Confirm</button>
               {{ csrf_field() }}
         </form>
            
            <div class="clearfix"></div>

		</div>
	</div>
</div>
@endsection
