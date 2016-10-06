<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Edit User</title>
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
        			<li class="active"><a href=>Profile </span></a></li>
      			</ul>
      			
      			<ul class="nav navbar-nav navbar-right col-md-2">
        			<li><a href= '/log_off'>Log Off</a></li>
          		</ul>
        
    		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->
	</nav>


			<div class = "container-fluid col-md-10">
				<a class="btn btn-primary navbar-right" href='/admin' role="button"> Return to Dashboard</a>
				<h1>Edit User # <?=$id ?> </h1>
			<!-- 	<a class="btn btn-primary navbar-right" href='/admin' role="button"> Return to Dashboard</a> -->
			<form action = '/update_name/<?=$id?>' method = "post" id ="edit_form">
				<h2>Edit Information</h2>
	  			<div class="form-group">
			   		<label for="email">Email address:</label>
			    		<input type="email" class="form-control" id="email" name = "email" value = "<?= $email ?>"  >
			    	<label for="first_name">First Name:</label>
			    		<input type="text" class="form-control" id="first_name" name = "first_name" value = "<?=$first_name ?>" >
			    	<label for="last_name">Last Name:</label>
			    		<input type="text" class="form-control" id="last_name" name = "last_name" value = "<?=$last_name ?>" > 	
					<button type = 'submit' class= "btn btn-success" role='button'>Save</button>
				</div>
				
			</form>

			<form action = '/update_password/<?=$id?>' method = "post" id = "edit_form">
				<h2>Change Password</h2>
	  			<div class="form-group">
			   		<label for="password">Password</label>
			    		<input type="password" class="form-control" id="password" name = "password" value = "<?=$password ?>">
			    	<label for="password_confirm">Password Confirmation:</label>
			    		<input type="password" class="form-control" id="confirm_password" name = "confirm_password">
			    	<button type = 'submit' class= "btn btn-success" role='button'>Update Password</button>
			    </div>
			</form>

			<form action = '/update_description/<?=$id?>' method = "post" id = "edit_form"> 
    			<div class="form-description">
     		 		<label for="edit_description">Edit Description:</label>
      					<input type="description" class="form-control" id="description" name = "description" value = "<?=$description?>">
    			</div>
    			<button type = 'submit' class= "btn btn-success navbar-right" role='button'>Save</button>
 		  	</form>
		</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>