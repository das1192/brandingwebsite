<?php require_once("../includes/initialize.php");
if($session->is_logged_in()) {
redirect_to("home.php");
$message ="";
}



				$username = "";
				$password = "";

 				
	if(isset($_POST['submit'])){


			  // form validation
	  $requierd_fields = array("username","password");
	  validate_presence($requierd_fields);
	  $max_field_length = array("username" => 15);
	  validate_max_length($max_field_length);



				if(empty($errors)){


				$username = trim($_POST['username']);
				$password = trim($_POST['password']);
				// Check database to see if username/password exist.
				$found_user = User::authenticate($username, $password);

				if ($found_user) {
				$session->login($found_user);
				redirect_to("home.php");
				} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.";
				}

				}
				$error_message = $errors;

}




?>




	 <!DOCTYPE html>
<!-- Template by html.am -->
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>PHOTO MANAGEME</title>
		<link href="style/style.css" media = "all" rel ="stylesheet" type = "text/css" />
		<link href="style/links.css" media = "all" rel ="stylesheet" type = "text/css" />
		<link href="style/jquery-ui.css" media = "all" rel ="stylesheet" type = "text/css" />
		<link rel="icon" href="images/icon.jpg" type="image/gif" sizes="16x16">
		  <script src="scripts/jquery.min.js"></script>
		  <script src="scripts/jquery-ui.min.js"></script>
		

	</head>
	
	<body>		

		<header id="header">
			<div id="logo">
				<img src="images/header.png" alt="header" style="width:100%;height:100%;">

			</div>
		</header>
				
		<main>
			<div class="innertube">

	<?php echo output_message($message); ?>

	<?php  if(isset($error_message)){
		   		echo form_errors($error_message);
		   		}  ?>
<center>
				
  <form action="login.php" method="post">
  

   <fieldset>
   <legend>Login information:</legend>
<p>

	<label>USERNAME :</label> <input type="text" name="username" value="<?php echo $username ; ?>">

</p>

<p>

	<label>PASSWORD :</label> <input type="password" name="password" value="">

</p>



  

<p>
	<input type="submit" name="submit" value="login">			
</p>

  </fieldset>
  </form>
  </center>
	</div>
		</main>



		<nav id="nav">
			<div class="innertube">
	
			</div>
		</nav>	
		
	
	</body>
</html>