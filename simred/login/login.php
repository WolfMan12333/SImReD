<?php
//session_start();
//require_once("class.user.php");
/*$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('panelg.php');
}
*/
//security header:
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');

if(isset($_POST['btn-login']))
{
	/*$uname = strip_tags($_POST['user']);
	$upass = strip_tags($_POST['password']);
	if($login->doLogin($uname,$upass))
	{
		$login->redirect('panelg.php');
	}
	else
	{
		$error = "Wrong Details !";
	}*/
	//$login = new USER();
	//$login->redirect('panelg.php');
	header('Location: panelg.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SImReD</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" text="text/css">

    <!-- Custom styles for this template -->
    <link href="cssstyle.css" rel="stylesheet" text="text/css">
  </head>

  <body>
    <form method="POST">
    <div class="container">
	<div class="cl-div">
	</div>
      <form class="form-signin">
	<div class="form-group">
	        <label for="inputEmail" class="sr-only">Login</label>
		<input name="user" type="email" id="inputEmail" class="form-control" placeholder="Login" required autofocus autocomplete="off">
		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus autocomplete="off">
		<button name="btn-login" class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
	</div>
      </form>

    </div> <!-- /container -->

    <script src="js/bootstrap.js"></script>
    <script src="jss.js"></script>
    </form>
  </body>
</html>
