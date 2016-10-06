<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Home Page</title>
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
		<div class = "container">
			<div class="jumbotron col-md-12">
				<div class = "row col-md-12">
		  			<h1>Welcome to the Test</h1>
		  			<p>We'are going to build a cool application using a MVC framwork!  This application was built with the Village88 folks!</p>
		  			<p><a class="btn btn-primary btn-lg" href='/sign_in' role="button">Start</a></p>
				</div>
			</div>
		</div> 

  		<div class="col-sm-4 col-md-4">
   			<div class="thumbnail">
      			<div class="caption">
        			<h3>Main Users</h3>
        			<p>Using this application, you'll learn how to add, remove, and edits users for the application</p>
      			</div>
   	 		</div>
  		</div>
  		<div class="col-sm-4 col-md-4">
   			<div class="thumbnail">
      			<div class="caption">
        			<h3>Leave Messages</h3>
        			<p>Users will be able to leave a message to another user using this application.</p>
      			</div>
   	 		</div>
  		</div>
		<div class="col-sm-4 col-md-4">
   			<div class="thumbnail">
      			<div class="caption">
        			<h3>Edit User Information</h3>
        			<p>Anyone will be able to edit another user's inforamtion (e-mail address, first name, last name, etc).</p>
      			</div>
   	 		</div>
  		</div>			
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>