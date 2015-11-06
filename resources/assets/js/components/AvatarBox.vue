<style lang="sass"> 
.avatar-box{
    display: inline-block;
    img {
        height: auto;
		float: left;
        width: 100px;
        border-radius: 6%;
    }
    .user-info{
    	float: right;
    	padding-left: 10px; 
    	.spacer{
    		height: 12px;
    	}
    	p {
    		margin-bottom: 0;
    	}
    	h3 {
    		margin-bottom: 0;
    	}
    }
    span {
	    display: inline-block;
        
    }
}
</style>

<template>
<div class="panel">
	<div class="panel-body">
		<div class="avatar-box">
            <img :src="currentUser.imgpath" alt="Avatar" class="avatar-status"> 
            <div class="user-info">
            	<p><strong>{{currentUser.name}}</strong></p>
	            <p><a href="/user/{{currentUser.username}}">@{{ currentUser.username }}</a></p>
	            <div class="spacer"></div>
	            <h3>12 <small>friends</small></h3>
            </div>            
        </div>         
	</div>
</div>
</template>

<script lang="es6">
var moment = require('moment');
export default {
    props: ['currentUser'],
}
</script>