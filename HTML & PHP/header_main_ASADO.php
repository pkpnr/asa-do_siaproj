<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Side dashboard</title>
	<?php include 'styles_ASADO.php'; ?>
</head>
<body>


	<input type="checkbox" id="check">

	<header>
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn"></i>
		</label>
		<div class="left_area">
			<h3>Asa-<span>Do?</span></h3>
		</div>

		<?php
			if(isset($_SESSION["UName"]))
			{
				echo '<div class="right_area">
						<a href="../LOGIN & SIGNUP/logout.php" class="logout_btn">Logout</a>
					  </div>';
			}
		?>

	</header>

	<div class="sidebar">
		<a href="home-page.php"><i class="fas fa-home"></i><span>Home</span></a>
		<a href="search-page.php"><i class="fas fa-search"></i><span>Search</span></a>
		<a href="about-sys-page.php"><i class="fas fa-info-circle"></i><span>About</span></a>
		<a href="help-page.php"><i class="fas fa-question-circle"></i><span>Help</span></a>
	</div>