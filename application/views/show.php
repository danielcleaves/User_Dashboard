<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Wall</title>
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
	      			<a class="navbar-brand" a href = '/'>Test App</a>
    			</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   		 		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">
        				<li class="active"><a href='/admin'>Dashboard <span class="sr-only">(current)</span></a></li>  
        				<li class="active"><a href=>Profile </span></a></li>
      				</ul>
      				<ul class="nav navbar-nav navbar-right col-md-2">
        				<li><a href= '/'>Log Off</a></li>	
          			</ul>
        		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->
		</nav>

		<?=$this->session->flashdata('update_success') ?>

		<div class = "container" id = "wall">
			<h3> <?= $show['first_name'] . " ". $show['last_name'] ?>  </h3>
			<p>Registered at: <?= date('m-d-Y',strtotime($show['created_at'])) ?></p>
			<p>User ID: <?= $show['id'] ?></p>
			<p>Email address: <?=$show ['email'] ?></p>
			<p>Description: <?= $show['description'] ?></p>
		</div>

		<div class = "post">
			<form action = '/add_message/<?=$show['id'] ?>' id ="message" method = "post">
				<h3>Leave a message for <?=$show['first_name'] ?></h3>
				<input type = "message" name = "msg">
				<button type = "submit" a class="btn btn-success navbar-right"> Post</a></button>
			</form>
		</div>

		<div class = "post">
				<? foreach($messages as $message)
				{
					echo "<h4>" . $message['user_id'] . ' wrote' . '<br>' . "<h4>" ;
					echo  $message['message'] . '<br>';
			
					foreach ($comments as $comment)
					{
						if($message['id'] == $comment['post_id'])
						{
							echo "<p>" . $comment['user_id'] . "\n" . $comment['created_at'] . "<br>" ;
							echo $comment['comment']. "<p>";
						}
					} ?>
				<form action = '/add_comment/<?=$message['id']?>' id = "comment" method = "post">
					<input type = "hidden" value = "<?=$show['id']?>" name = "wall_id">
					<input type = "comment" id = "comment" name = "comment">
					<button type = "submit" a class="btn btn-success navbar-right" role="button"> Comment</a></button>
				</form>
			</div>
			
			<? }
			?>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>