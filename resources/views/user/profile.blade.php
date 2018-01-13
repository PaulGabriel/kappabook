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
						<li class="active">
							<a href="{{ route('user.profile') }}">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="{{ route('user.update') }}">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Orders </a>
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
				
				<!--
				@foreach($profiles as $profile)
				<img src="{{ $profile['avatar_url'] }}">
				@endforeach
				-->
				
                @if(Auth::user()->sex)
				<p class="pull-left">Mr or Ms </p>
				@endif
				@if(Auth::user()->sex)
						<p class="text-center text-strong">{{ Auth::user()->sex }}</p>
				@endif
				@if(Auth::user()->name)
					<p class="pull-left">Name:</p>
						<p class="text-center text-strong">{{ Auth::user()->name }}</p>
				@endif
				@if(Auth::user()->firstname)
                    <p class="pull-left">Firstname:</p>
						<p class="text-center text-strong">{{ Auth::user()->firstname }}</p>
				@endif
				@if(Auth::user()->lastname)
                    <p class="pull-left">Lastname:</p>
						<p class="text-center text-strong">{{ Auth::user()->lastname }}</p>
				@endif
				@if(Auth::user()->email)
                    <p class="pull-left">E-mail:</p>
						<p class="text-center text-strong">{{ Auth::user()->email }}</p>
				@endif
				@if(Auth::user()->phone)
                    <p class="pull-left">Phone:</p>
						<p class="text-center text-strong">{{ Auth::user()->phone}}</p>
				@endif
				@if(Auth::user()->adress)
			
                    <p class="pull-left">Adress:</p>
                        <p class="text-center text-strong">{{ Auth::user()->adress }}</p>
				@endif

            <a href="{{ route('user.update') }}">
            <button type="button" class="btn btn-default pull-right">Change</button>
                </a>
            <div class="clearfix"></div>
            </div>
		</div>
	</div>
</div>
@endsection
