@extends('app')

@section('content')
<navbar brand="false"></navbar>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<messagesfeed :current-user.sync="currentUser" 
			:users.sync="users"
			:messages.sync="messages">
		</messagesfeed>
	</div>
</div>
</div>
@endsection