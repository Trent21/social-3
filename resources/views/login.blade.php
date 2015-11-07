@extends('app')

@section('content')

<nav class="navbar navbar-default">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	  </div>
	  <div class="collapse navbar-collapse" id="navbar">

	    <ul class="nav navbar-nav navbar-right">
	      <li><a data-toggle="modal" data-target=".modal">Login</a></li>

	    </ul>
	  </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<div class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <h4>Login to your account</h4>
		<login show-link="true"></login>	
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="container">
	<div class="homepage-header">
	
        <h1>Welcome to Social</h1>       
	    <p>A social network for your business.</p>
	    <p>Create an account or login to get started.</p>
    </div>
</div>
<div class="panel">
	<div class="panel-body">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1 border-right">
					<h4>Login to your account</h4>
					<login></login>
				</div>
				<div class="col-sm-5">
					<h4>Register for an account</h4>
					<register></register>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection