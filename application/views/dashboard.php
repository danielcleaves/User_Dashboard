<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Dashboard</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function(){
				$('#remove').click(function(){
					alert('Are you sure you want to delete the user')
				});
			});
		</script>

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
      			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href= >Profile </span></a></li>  
      			</ul>
      			<ul class="nav navbar-nav navbar-right col-md-2">
        			<li><a href= '/sign_in'>Sign In</a></li>
          		</ul>
        
    		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->
	</nav>
	
			<div class = "container row-md-8">
				<h2 class = "manage_users">Manage Users</h2>
				<a class="btn btn-primary navbar-right" href='/new' role="button">Add New</a>

				<table class = 'table table-bordered'>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Created_at</th>
						<?php if($this->session->userdata['user']['user_level'] == 'Admin') { ?>
						<th>User_Level</th>
						<th>Actions</th>
					</tr>
					<?php }?>
				</thead>
				<tbody>
					<tr>
						<?php foreach($view as $user) { ?>
						<td><?=$user['id']?></td>
						<td><a href = "/profile/<?=$user['id']?>"> <?=$user['first_name'] . " " .  $user['last_name']?></a></td>
						<td><?=$user['email'] ?></td>
						<td><?=$user['created_at'] ?></td>

						<?php if($this->session->userdata['user']['user_level'] == 'Admin') { ?>
						<td><?=$user['user_level']?></td>
						<td><a href = "/edit/<?=$user['id']?>" > Edit | </a> <a href = "/delete/<?=$user['id'] ?>" id = "remove" >Remove</a></td>
					<?php } ?>
					</tr>
					<?php } ?>
				</tbody>
			</table>
				<?=$this->session->flashdata('update_error') ?>
				<?=$this->session->flashdata('update_success') ?>
				<?=$this->session->flashdata('description_success') ?>

		</div>

		<!-- Latest compiled and minified JavaScript -->
		
	</body>
</html>