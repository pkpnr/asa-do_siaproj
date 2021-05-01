<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Side dashboard</title>
	<?php include 'styles.php'; ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


	<input type="checkbox" id="check">

	<header>
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn"></i>
		</label>
		<div class="left_area">
			<h3>Something <span>Here</span></h3>
		</div>

		<?php
			if(isset($_SESSION["UName"]))
			{
				echo '<div class="right_area">
						<a href="includes/logout.php" class="logout_btn">Logout</a>
					  </div>';
			}
		?>
	</header>

	<div class="sidebar">
		<a href="home-page.php"><i class="fas fa-home"></i><span>Home</span></a>
		<a href="search-page.php"><i class="fas fa-search"></i><span>Search</span></a>
		<a href="about-us-page.php"><i class="fas fa-info-circle"></i><span>About us</span></a>
		<a href="help-page.php"><i class="fas fa-question-circle"></i><span>Help</span></a>
		<a href="settings-page.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
	</div>