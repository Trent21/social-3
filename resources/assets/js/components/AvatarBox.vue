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

.friend {  
    clear: both;   
    img {
        height: auto;
        width: 50px;
        border-radius: 6%;
        float: left;
    }
    span{
        margin-left: 1em;
        margin-top: 4px;

        float: left;
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
	            <h3 @click="showFriends()">{{currentUser.friends.length}} <a @click.prevent=""><small>friends</small></a></h3>
            </div>            
        </div>         
	</div>
</div>

<div id="friendslist" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Friends</h4>
            </div>
            <div class="modal-body">
                <div v-for="f in currentUser.friends" class="friend">
                         <hr>

                        <img :src="users[f].imgpath" alt="Avatar" class="avatar-status">
                        <span><strong>{{users[f].name}}</strong> <i style="color: #3BB03B;" v-show="users[f].available">available</i><br /><a href="/user/users[f].username}}">@{{ users[f].username }}</a></span>
                        <button class="btn btn-primary pull-right" @click="removeFriend(f)">Remove Friend</button>
                </div>
            </div>
            <div class="modal-footer">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
</template>

<script lang="es6">
var moment = require('moment');
window.$ = window.jQuery = require('jquery')

export default {
    methods: {
        showFriends: function (){
            console.log(this.currentUser.friends.length)
            if(this.currentUser.friends.length > 0)
                $('#friendslist').modal('toggle')
            else alert('You have 0 friends, so the friends list cannot be shown.')
        },
        removeFriend: function(friendID){
            var i = this.currentUser.friends.indexOf(friendID)
            if(i != -1) {
                this.currentUser.friends.splice(i, 1)
            }
            if(this.currentUser.friends.length < 1){
                $('#friendslist').modal('toggle')
            }
        }
    },
    computed: {

    },
    props: ['currentUser', 'users'],
}
</script>