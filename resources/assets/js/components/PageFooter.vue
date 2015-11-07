<template>
<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h3>Social</h3>
				<p>A social media prototype. Created by Jimmy Cook as part of a student project at Fife College and Abertay University.</p>			
			</div>

		</div>
	</div>
</footer>
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
.page-footer {
	margin-top: 2em;
	padding-bottom: 3em;
	padding-top: 2em;
	min-height: 170px;
	background-color: #000D28;
	
	h3{
		color: #ccc;
	}
	p{
		line-height: 2.3em;
		color: #ccc
	}
}
</style>