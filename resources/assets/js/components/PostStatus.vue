<style lang="sass">
.status-form-custom {
    margin-bottom: 0;
}

.form-group-custom {
    margin-bottom: 0;
}
</style>	
<template>
<div class="panel">
    <div class="panel-body"> 
        <form class="status-form status-form-custom">
            <div class="input-group form-group-custom">
                <input type="text" v-model="newMessage" class="form-control" placeholder="Post a status" class="">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn" v-on:click.prevent="submitMessage()">Submit</button>
                </span>
            </div>
        </form>
    </div>
</div>
</template>	
<script lang="es6">
    var moment = require('moment');
    export default {
        data() {
            return {            
                newMessage: "",
            }
        },
        props: ['posts', 'messages', 'currentUser'],
        methods: {
            submitMessage: function(e) {
                if (this.newMessage.length > 0) {
                    this.posts.push({
                        user: this.currentUser.id,
                        content: this.newMessage,
                        date: moment(),
                        comments: [],
                        liked: false,
                    });

                    this.newMessage = "";
                };
            },
        },
    }
</script>