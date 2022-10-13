<!DOCTYPE html>
<html>
<head>
	<title>WEB PORTFOLIO</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	
<?php
            $Firstnm = "Michael <br>Jhericho";
            $Lastnm = "Merka";
            $Speciality = "I'am a Web Developer";
			$whatidid1 ="Developer";
			$whatidid2 ="Designer";
           
            ?>

		<div class="content">
		<?php echo"<h4>Hello, my name is</h4>"?>
		<?php echo"<h1>$Lastnm <span>$Firstnm</span></h1>"?>
		<?php echo"<h3>$Speciality</h3>"?>
			
			
			<div class="newslatter">
				<form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form>
			</div>
		</div>
	</div>
	
	<section class="about">
		<div class="main">
			<img src="img/idp.png">
			<div class="about-text">
				<?php echo"<h2>About Me</h2>"?>
				<?php echo"<h5>$whatidid1 <span>& $whatidid2</span></h5>"?>
				<?php echo "<p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations.I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations.A responsive design makes your website accessible to all users, regardless of their device.</p>"?>
				<button type="button">Let's Talk</button>
			</div>
		</div>
	</section>

	<div class="service">
		<div class="title">
			<h2>Our Services</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<?php echo "<h5>Web Development</h5>"?>
				<div class="pra">
					<?php echo "<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>"?>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<?php echo"<h5>Web Development</h5>"?>
				<div class="pra">
					<?php echo "<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>"?>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<?php echo"<h5>Web Development</h5>"?>
				<div class="pra">
					<?php echo"<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>"?>
						<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	
	<div class="contact-me">
		<p>Let Me Get You A Beautiful Website.</p>
		<a class="button-two" href="https://www.linkedin.com/in/michael-jhericho-merka-3412a1253/">Hire Me</a>
	</div>

	
	<footer>
		<?php echo"<p>$Lastnm, $Firstnm</p>"?>
		
		<div class="social">
			<a href="https://www.facebook.com/michaeljhericho.merka"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.instagram.com/michael_jhericho/?hl=en"><i class="fab fa-instagram"></i></a>
			<a href="https://www.linkedin.com/in/michael-jhericho-merka-3412a1253/"><i class="fab fa-linkedin-in"></i></a>
		</div>
	</footer>
</body>
</html>