<?php
	$pgNm = 'Help';
	$pgFileNm = 'help-page.php';
	include('../header_main_ASADO.php');
?>
<div class="container">

	<div class="slider">
		<div class="slides">

			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">
			<input type="radio" name="radio-btn" id="radio5">



			<div class="slide first">
				<img src="../../IMAGES/Help Page/help-p1.jpg" alt="">
			</div>

			<div class="slide">
				<img src="../../IMAGES/Help Page/help-p2.jpg" alt="">
			</div>

			<div class="slide">
				<img src="../../IMAGES/Help Page/help-p3.jpg" alt="">
			</div>

			<div class="slide">
				<img src="../../IMAGES/Help Page/help-p4.jpg" alt="">
			</div>

			<div class="slide">
				<img src="../../IMAGES/Help Page/help-p5.jpg" alt="">
			</div>

		</div>

		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
			<label for="radio5" class="manual-btn"></label>
		</div>

		
	</div>

	<div class="content"></div>

<?php
	include('../footer_main_ASADO.php');
?>
