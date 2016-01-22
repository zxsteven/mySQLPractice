<? 

	session_start();
	
	include("connection.php");

	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_array($result);
	$diary=$row['diary'];

?>

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
  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header pull-left">
	      <a class="navbar-brand" href="#">Secret Diary</a>
	    </div>
	    <div class="pull-right">
	      <ul class="navbar-nav nav">
	      	<li><a href="index.php?logout=1">Log Out</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<div class="container-fluid contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<textarea class="form-control"><?php echo $diary; ?></textarea>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src='app.js'></script>
  </body>
</html>