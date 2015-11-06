<style>
    
</style>

<template>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <i class="fa fa-bars fa-lg"></i>
      </button>
      <span v-if="showBrand">
        <a class="navbar-brand" href="#">
          Social
        </a>
      </span>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Home
        </a></li>
        <li><a href="/messages">Messages </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/account">Account</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</template>

<script lang="es6">
    export default {
        props: ['active', 'brand'],
        data() {
            return {
              showBrand: false,
            }
        },
        ready: function() {
        },
        methods: {
        },
        filters: {
        }
    }
</script>