<template>
<div class="panel">
	<div class="panel-body">
		<h3 style="margin-top: 5px;">New Here?</h3>
		<p>Check out our orientation area...</p>
		<a role="button" @click.prevent="showModal()" class="btn btn-primary btn-block">Go</a>
	</div>
</div>

<div id="orientation" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Welcome to Social</h4>         
            </div>
            <div class="modal-body">
            	<hr>
                <p>Hi there, here's a quick orientation in social. Note: this is an early prototype; there are still features on the way... </p>
                <hr>
                <p>To post a status, go to the top of the home page and click on the input field that says 'Post a status', press submit to post it.</p>
                <hr>
                <p>You can interact with a status in many ways, for example to like a status you can just click like.</p>
                <p>To collaborate or contribute to a status, just hit collaborate and it'll take you to the input field. When you're happy with your addition, just hit submit.</p>
                <hr>
                <p>To private message with somebody, just hit create a conversation and you'll see a new conversation appear in your list.</p>
                <p>To continue a conversation, just hit chat in your list of conversations.</p>
                <hr>
                <p>You can view your friends just by clicking on your friend count.</p>
                <p>While viewing your friends you can also remove them by hitting the remove button.</p>
                <hr>
                <p>To log out of social, just press the logout link in the navigation.</p>
				<hr>
				<p>Hopefully this gives you enough to get started using Social, good luck!</p>

            </div>
            <div class="modal-footer">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
</template>

<script lang="es6">
var moment = require('moment');
export default {
	methods: {
		showModal: function () {
			$('#orientation').modal('toggle')
		}
	},
    data(){
        return {

        }
    }
}
</script>

<style lang="sass"> 

</style>