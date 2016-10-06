<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Register</title>
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

		<form action = '/register' method = 'post'>
			<h1>Register</h1>
  			<div class="form-group">
		   		<label for="email">Email address:</label>
		    	<input type="email" class="form-control" id="email" name = "email">
		  	</div>
		  	<div class="form-group">
		    	<label for="first_name">First Name:</label>
		    	<input type="text" class="form-control" id="first_name" name = "first_name">
		  	</div>
		  	<div class="form-group">
		    	<label for="last_name">Last Name:</label>
		    	<input type="text" class="form-control" id="last_name" name = "last_name">
		  	</div>
		  	<div class="form-group">
		    	<label for="pwd">Password:</label>
		    	<input type="password" class="form-control" id="password" name = "password">
		  	</div>
		  		<div class="form-group">
		    	<label for="confirm_password">Confirm Password:</label>
		    	<input type="password" class="form-control" id="confirm_password" name = "confirm_password">
		  	</div>
		  	<div class = 'errors'>
		  		<?=$this->session->flashdata('errors') ?>
		  	</div>
		  	<button type = 'submit' class= "btn btn-success" role='button'>Register</button>
		</form>
			<a href = '/sign_in'> Already have an account? Login!</a>
		</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
</html>