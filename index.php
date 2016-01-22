<? include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Secret Diary</title>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Secret Diary</a>
	    </div>
	    <div class="collapse navbar-collapse" id="navbar-collapse">
	      <form class="navbar-form navbar-right">
	      	<div class="form-group">
	      		<input type="email" placeholder="Email..." class="form-control" />
	      	</div>
	      	<div class="form-group">
	      		<input type="password" placeholder="Password..." class="form-control" />
	      	</div>
	      	<button type='submit' class="btn btn-success">Log In</button>
	      </form>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<div class="container-fluid contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<h1 class="marTop">Secret Diary</h1>
				<p class="lead">Your own private diary. With you whenever.</p>
				<?php
	 			 	if ($error) { echo '<div class="alert alert-danger">'.addslashes($error).'</div>'; }
	 			 	if ($message) { echo '<div class="alert alert-success">'.addslashes($message).'</div>'; } 
	 			?>
				<p class="bold marTop">Interested? Sign up below!</p>
				<form class="marTop" method="post">
					<div class="form-group">
					<label for="email">Email Address</label>
					 	<input type="email" name="email" class="form-control" placeholder="Enter password here..." value="<? echo addslashes($_POST['email']); ?>" />
				  </div>
				  <div class="form-group">
					<label for="password">Password</label>
					 	<input type="password" name="password" id="password" class="form-control" placeholder='Enter password here...' value="<? echo addslashes($_POST['password']); ?>" />
				  </div>
				  <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marTop">
				</form>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src='app.js'></script>
  </body>
</html>