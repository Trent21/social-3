<template>
<div class="login-form">
<form action="/home">
    <input type="text" id="register-start" class="form-control floating-label" placeholder="Username">
    <input type="text" class="form-control floating-label" placeholder="Email">
    <input type="password" class="form-control floating-label" placeholder="Password">    
    <input type="password" class="form-control floating-label" placeholder="Confirm Password">    
    <input type="submit" class="btn btn-primary btn-block" value="Submit">
</form>
</div>
</template>

<script lang="es6">
var moment = require('moment');
export default {
    data(){
        return {

        }
    }
}
</script>

<style lang="sass"> 
</style>