<style lang="sass"> 
.feed__post {
    padding: 10px 0;
}

.status-form{
    margin-bottom: 2em;
}

.post-panel{
    padding-bottom: 0px;
}
.comment-panel{
    padding-top: 0px;
    padding-bottom: 0px;
}

.post-header{
    position: relative;
    
    img {
        height: auto;
        width: 43px;
        border-radius: 6%;
    }
    span{
        position: absolute;
        top: 0;
        left: 55px;
    }
    div{
        float: left;
    }
}

.comment{
    position: relative;
    span{
        position: absolute;
        top: 0;
        left: 55px;
    }
    img {
        height: 43px;
    }
}

.post-content{
    margin: 1em 0;
    font-size: 16px;
}

.options{
    padding-top: 0.5em;
    padding-bottom: 0.5em;
    padding-left: 1em;
    border-top: 1px solid #e6e6e6;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 1.5em;

}
</style>

<template>
<div  v-for="post in posts | orderBy 'date' -1" class="panel">
    <div class="panel-body post-panel">
        <div class="post-header">
            <img :src="users[post.user].imgpath" alt="Avatar" class="avatar-status">
            <span><strong>{{users[post.user].name}}</strong><br /><a href="/user/{{users[post.user].username}}">@{{ users[post.user].username }}</a> - {{ post.date | fromNow }} </span>
        </div>            
        <p class="post-content">{{ post.content }}</p>
    </div>
    <div class="options">
        <a href="#" @click.prevent="focusComment()">Comment</a> |
        <a href="#" @click.prevent="post.liked = !post.liked" v-show="post.liked">Unlike</a>
        <a href="#" @click.prevent="post.liked = !post.liked" v-show="!post.liked">Like</a>
    </div>
    <div class="panel-body comment-panel">
        <div class="post-footer">
            <div class="comment" v-for="comment in post.comments | orderBy 'date'">
                    <img :src="users[comment.user].imgpath" alt="Avatar" class="avatar-comment">
                    <span><strong>{{users[comment.user].name}}</strong> <a href="/user/{{users[post.user].username}}">@{{ users[comment.user].username }}</a><br />{{comment.message}}</span>
                <hr>
            </div>
            <form>
                <div class="input-group form-group">
                    <input type="text" id="comment-box" v-model="post.newComment" class="form-control" placeholder="Post a comment...">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-default" v-on:click.prevent="submitComment(post)">Post</button>
                    </span>
                </div>
            </form>
        </div> 
    </div>
</div>
</template>

<script lang="es6">
    var moment = require('moment');

    export default {
        data() {
            return {     
                newComment: "",       
            }
        },
        methods: {
            submitComment: function(post){
                if (post.newComment.length > 0){
                    post.comments.push({
                        message: post.newComment,
                        user: this.currentUser.id,
                        date: moment(),
                    })
                    post.newComment = "";
                }            
            },
            focusComment: function(){
                $("#comment-box").focus();
            },
        },  
        props: ['users', 'posts', 'messages', 'currentUser'],
        filters: {
            fromNow : function (date) {
                return moment(date).fromNow();
            }
        },
    }
</script>