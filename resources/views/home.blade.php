@extends('app')

@section('content')
<navbar brand="false"></navbar>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4 col-md-3 hidden-xs">
		<avatarbox :current-user.sync="currentUser"></avatarbox>
		<friendslist></friendslist>	
		<div class="panel">
			<div class="panel-body">
				<h3 style="margin-top: 5px;">New Here?</h3>
				<p>Check out our orientation area...</p>
				<a role="button" href="/orientation" class="btn btn-primary btn-block">Go</a>
			</div>
		</div>
	</div>

	<div class="col-sm-8 col-md-7">
		<poststatus :posts.sync="posts" :current-user.sync="currentUser"></poststatus>
		<feed :current-user.sync="currentUser" :users.sync="users" :posts.sync="posts"></feed>
	</div>
	<div class="col-md-2 hidden-sm hidden-xs">
		
	</div>
</div>
</div>
@endsection