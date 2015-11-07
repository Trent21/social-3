<?php

get('/', function(){
	return redirect('/login');
});
get('/login', function(){
	return view('login');
});
get('/home', function(){
	return view('home');
});
get('/messages', function(){
	return view('messages');
});
get('/friends', function(){
	return view('friends');
});
get('/orientation', function(){
	return view('orientation');
});
get('/blog', function(){
	return view('blog');
});
get('/login', function(){
	return view('login');
});
