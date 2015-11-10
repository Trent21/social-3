<template>
<div class="panel">
    <div class="panel-body"><h4>Private Messaging</h4></div>
        <div class="panel-body" v-for="conversation in conversations">
            <div class="conversation-header">
                <img :src="conversation.withUser.imgpath" alt="Avatar" class="avatar-status">
                <span><strong>{{conversation.withUser.name}}</strong> <i style="color: #3BB03B;" v-show="conversation.withUser.available">available</i><br /><a href="/user/conversation.withUser.username}}">@{{ conversation.withUser.username }}</a></span>
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#conversation{{conversation.id}}">Chat</button>
            </div>
            <div id="conversation{{conversation.id}}" class="modal fade" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                            <h4>Conversation with <a href="">@{{conversation.withUser.username}}</a></h4>
                        </div>
                        <div class="modal-body">
                            <div id="messages{{conversation.id}}"class="messages" data-spy="scroll" >
                                    <span 
                                        class="message" 
                                        v-for="message in conversation.messages"
                                        :class="{'current-user': isCurrentUser(message.user)}">{{message.message}}</span>
                            </div>
                            <hr />
                            <form class="status-form status-form-custom">
                                <div class="input-group form-group-custom">
                                    <input type="text" v-model="message" class="form-control" placeholder="" class="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary btn" v-on:click.prevent="submitMessage(conversation)">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal --> 
        </div>
        <div class="panel-body">
            <button class="btn btn-blick btn-primary" @click.prevent="startAConversation()" style="width: 100%;">Create a conversation</button>
        </div>

    </div>
</div>

<div id="start-conversation" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4>Create a Conversation</h4>

            </div>
            <div class="modal-body">
                <div v-for="f in currentUser.friends" class="friend">
                         <hr>
                        
                        <img :src="users[f].imgpath" alt="Avatar" class="avatar-status">
                        <span><strong>{{users[f].name}}</strong> <i style="color: #3BB03B;" v-show="users[f].available">available</i><br /><a href="/user/users[f].username}}">@{{ users[f].username }}</a></span>
                        <button class="btn btn-primary pull-right" @click="chatWith(f)">Chat</button>
                </div>

            </div>
            <div class="modal-footer">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
</template>

<style lang="sass"> 

span.message{
    float:left;
    color:white;
    background-color: #2196f3;
    margin-top: 0.3em;
    padding: 0.8em;
    border-radius: 2em;
    float: left;
    width: auto;
    max-width: 80%;
    clear: both;
}
span.current-user{
    float: right;
    background-color: #555;
}

.messages{
    overflow-y: auto;
    max-height: 400px;
}

.conversation {
    padding-bottom: 10px;
}
.conversation-header{
    position: relative;
    
    img {
        height: auto;
        width: 50px;
        border-radius: 6%;
    }
    span{
        position: absolute;
        top: 4px;
        left: 62px;
    }
    div{
        float: left;
    }
}
</style>

<script lang="es6">
var moment = require('moment');
window.$ = window.jQuery = require('jquery')

export default {
	methods: {
        isCurrentUser: function(userID){
            if(this.currentUser.id == userID) return true;
            return false;
        },
        submitMessage: function(conversation){
            if(this.message != ''){
                conversation.messages.push({
                    user: this.currentUser.id,
                    message: this.message
                });
                this.message = '';
                $('#messages'+conversation.id).animate({
                scrollTop: $('#messages'+conversation.id).get(0).scrollHeight}, 100);   
            }
        },
        startAConversation: function (){
            $('#start-conversation').modal('toggle')
        },
        chatWith: function(userID){
            var conversationid = this.conversations.length + 1
            console.log(conversationid)
            this.conversations.push({
                withUser: this.users[userID],
                lastUpdated: moment(),
                id: conversationid,
                messages: []
            })
            $('#start-conversation').modal('toggle')
        }
	},
    data(){
        return {
        	conversations: [
        		{
        			withUser: this.users[1],
        			lastUpdated: moment(),
                    id: 1,
        			messages: [
        				{
        					user: 1,
        					message: 'Hi!',
        				},
        				{
        					user: 2,
        					message: 'Hello there.',
        				},
        				{
        					user: 1,
        					message: 'How are you?',
        				},
        				{
        					user: 2,
        					message: 'Very well thank you! Yourself?',
        				},
        				{
        					user: 1,
        					message: 'Oh there is a meeting tomorrow, I forgot to at work today, 9am in the conference room'
        				},
        				{
        					user: 2,
        					message: 'Thank you for the heads up I will be there. I am very well thank you!',
        				},        	
        			],
        		},
                {
                    withUser: this.users[3],
                    lastUpdated: moment(),
                    id: 2,
                    messages: [
                        {
                            user: 3,
                            message: 'Hi!',
                        },
                        {
                            user: 2,
                            message: 'Hello there.',
                        },
                        {
                            user: 3,
                            message: 'How are you?',
                        },
                        {
                            user: 2,
                            message: 'Very well thank you! Yourself?',
                        },
                        {
                            user: 3,
                            message: 'Oh there is a meeting tomorrow, I forgot to at work today, 9am in the conference room'
                        },
                        {
                            user: 2,
                            message: 'Thank you for the heads up I will be there. I am very well thank you!',
                        },          
                    ],
                },
                
        	],
        }
    },
    props: ['users', 'currentUser']
}
</script>

