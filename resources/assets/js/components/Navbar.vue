<style>
.navbar{
  color: white !important;
}

.btn{
  color: white !important;
}
</style>

<template>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span v-if="showBrand">
        <a class="navbar-brand" href="#">
          Social
        </a>
      </span>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li @click.prevent="openOrientation()"><a>Orientation</a></li>
        <li @click.prevent="openFriends()"><a>Friends</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</template>

<script lang="es6">
    export default {
        props: ['active', 'brand', 'currentUser'],
        data() {
            return {
              showBrand: false,
            }
        },
        ready: function() {
        },
        methods: {
          openOrientation: function(){
            $('#orientation').modal('toggle')

          },
          openFriends: function(){
            if(this.currentUser.friends.length > 0)
                $('#friendslist').modal('toggle')
            else alert('You have 0 friends, so the friends list cannot be shown.')
          }
        },
        filters: {
        }
    }
</script>