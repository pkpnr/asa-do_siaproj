<!DOCTYPE html>
<html>

<head>
	<title>Log-In Form</title>
	<?php 
	
	$pgFileNm = 'login.php';
	include('../styles_ASADO.php'); 
	
	?>
	</head>
<body>
	<div class = "loginbox">
	<img src="../../IMAGES/Login & Signup/avatar.png" class="avatar">
		<h1>Log In Here</h1>
		<form action="proc_login.php" method="POST">
			<p>Username/Student ID</p>
			<input type="text" name="Username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="Pwd" placeholder="Enter Password">

			<input type="submit" name="submit" value="Login">
			<br><br>
			<a href="sign-up.php">Don't have an account? too bad</a>

		</form>	

		<?php
    if (isset($_GET["invalid"])) //error messages
    {
      if ($_GET["invalid"] == "noInp")
      {
        echo "<p>Please fill up all required fields.</p>";
      }
      else if ($_GET["invalid"] == "LoginError")
      {
        echo "<p>Invalid login information. Please check again.</p>";
      }
    }
  ?>
	</div>


</body>
</html>