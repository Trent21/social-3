<?php

get('/home', function(){
	return view('home');
});
get('/', function(){
	return view('login');
});
