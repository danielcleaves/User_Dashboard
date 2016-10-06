<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Signon</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		
		<meta name = "description" content = "User Dashboard"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<link rel = "stylesheet" type= "text/css" href = "/assets/css/bootstrap.css"/>
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
	      		<a class="navbar-brand">Test App</a>
    		</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   		 	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href='/'>Home <span class="sr-only">(current)</span></a></li>  
      			</ul>
      			<ul class="nav navbar-nav navbar-right col-md-2">
        			<li><a href= '/sign_in'>Sign In</a></li>
          		</ul>
        
    		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->
		</nav>
		<div class = "container navbar-right">

		<form action = '/sign_on' method = "post">
			<h1>Signin</h1>
  			<div class="form-group">
		   		<label for="email">Email address:</label>
		    	<input type="email" class="form-control" id="email" name = "email">
		  	</div>
		  	<div class="form-group">
		    	<label for="pwd">Password:</label>
		    	<input type="password" class="form-control" id="pwd" name = "password">
		  	</div>

		  	
		  	<div class = "errors">
		  		<?=$this->session->flashdata('errors') ?>
		  		<?=$this->session->flashdata('update_error') ?>
		  		<?=$this->session->flashdata('login_errors') ?>
		 	</div>


		  	<button type = "submit" class = "btn btn-success" role='button'>Sign In</button>
		</form>
		
			<a href = '/register' > Don't have an account? Register</a> 
			</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>