@extends('app')

@section('content')
	<navbar brand="false"></navbar>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4 col-md-3 hidden-xs">
			<avatar-box :current-user.sync="currentUser"></avatar-box>
		</div>

		<div class="col-sm-8 col-md-7">
			<post-status :posts.sync="posts" :current-user.sync="currentUser"></post-status>
			<feed :current-user.sync="currentUser" :users.sync="users" :posts.sync="posts"></feed>
		</div>
		<div class="col-md-2 hidden-sm hidden-xs">
			
		</div>
	</div>
	</div>
@endsection