@extends('app')

@section('content')
<navbar brand="false" :current-user.sync="currentUser"></navbar>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4">
		<avatarbox :current-user.sync="currentUser" :users.sync="users"></avatarbox>		
		<messages 
			:current-user.sync="currentUser"
			:users.sync="users"
			></messages>
		<orientation></orientation>
	</div>
	<div class="col-sm-8">
		<poststatus :posts.sync="posts" :current-user.sync="currentUser"></poststatus>
		<feed :current-user.sync="currentUser" :users.sync="users" :posts.sync="posts"></feed>
	</div>
</div>
</div>
@endsection