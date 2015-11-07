<template>
<div class="login-form">
    <form action="/home">
        <input type="text" class="form-control floating-label" placeholder="Email">
        <input type="password" class="form-control floating-label" placeholder="Password">  
        <input type="submit" class="btn btn-primary btn-block" value="Submit">
    </form>

    <p  v-show="showLink" class="text-center"><a @click.prevent="focus('#register-start', '.modal')">Need an account?</a></p>
</div>
</template>

<script lang="es6">
var moment = require('moment');
window.$ = window.jQuery = require('jquery')
var bootstrap = require('bootstrap');

export default {
    data(){
    },
    props: ['showLink'],
    methods: {
        focus: function(selector, modalSelector){
            $(modalSelector).modal('toggle');
            $(selector).focus();
        }
    }
}
</script>

<style lang="sass"> 
.login-form{
    input {
        margin-top: 20px;
    }
    a{
        margin-top: 35px;
        margin-bottom: 20px;
    }
}
</style>