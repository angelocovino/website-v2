<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="author" content="Angelo Covino">
	<meta name="description" content="Angelo Covino Web Developer">
	<!--
	<meta name="copyright" content="Copyright 2015 Angelo Covino" />
	<meta name="distribution" content="global" />
	-->
	<meta name="keywords" content="Angelo, Covino, Angelo Covino, angelotm">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="2 days" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- TITLE -->
	<title>Angelo Covino</title>
	<!-- LINKS -->
	<?php
		$images_path="images/";
		$stylesheet_path="stylesheet/";
	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $images_path; ?>icono.ico" />
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:300,400'>
	<link rel='stylesheet' type='text/css' href='<?php echo $stylesheet_path; ?>stylesheet.css'>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
		/* SCROLL TO ANCHORS */
		$(document).ready(function(){
			$('a[href^="#"]').click(function(e){
				e.preventDefault();
				var target = this.hash;
				var $target = $(target);

				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 900, 'swing', function(){
					window.location.hash = target;
				});
			});
		});
	</script>
</head>
<body>
	<section id="top_gap">&nbsp;</section>

	<section id="upper_menu">
		<header>
			<!--
			<h1><img src="logo1.png" /></h1>
			-->
			<nav>
				<?php
					$entries = array(
						"works",
						"about me",
						//"writing",
						"contact"
					);
					$entries_links = array(
						"#portfolio",
						"#about",
						//"writing.php",
						"#contacts"
					);
					for($i=0; $i<count($entries); $i++):
						echo "<a href=\"${entries_links[$i]}\">${entries[$i]}</a>";
					endfor;
				?>
			</nav>
		</header>
		<section id="banner">
			<div class="big">Clarity, Simplicity, Beauty</div>
			<div class="less_big">New technologies, warm old-fashioned eyes</div>
		</section>
		<a class="button_white" href="#contacts">work with me</a>
		<!--
		<div class="small simple_link">or <a href="#">read about my workflow</a></div>
		-->
	</section>
	
	<section id="portfolio">
		<div class="title">most recent works</div>
		<ul>
			<li>
				<a href="//salvatorecatapanoarchitects.co.uk/" target="_blank"><img src="<?php echo $images_path; ?>sca.jpg" /></a>
			</li><li>
			<!--
				<a href="//angelotm.altervista.org/liferesidential/index.html"><img src="<?php echo $images_path; ?>angelotm.jpg" /></a>
			</li><li>
			-->
				<a href="//angelotm.altervista.org/portfolio_data/liferesidential/index.html" target="_blank"><img src="<?php echo $images_path; ?>liferesidential.jpg" /></a>
			</li>
		</ul>
		<br />
		<br />
		<a href="//www.behance.net/angelocovino" class="button_colored" target="_blank">view behance portfolio</a>
	</section>
	
	<section id="about">
		<div class="about_img">
			<img src="<?php echo $images_path; ?>angelo.jpg" />
		</div><div class="about_me">
			<div class="title">about me</div>
			Hello! I am a self-taught Web Developer &amp; User Interface Designer based in London.<br />
			<br />
			Born in Naples (Italy), I have begun to study Computer Science in Naples, and I would like to complete it in London. In December 2014 I am arrived in London to start an awesome experience.<br />
			<br />
			I have a genuine passion in what I do, in fact I have started when i was just a child with HTML4. I can still remember how proud I was when I saw my first 'Hello World!'. That has been the moment I realized it was my real passion.<br />
			<br />
			I often spend my free time learning new languages and developing something on my personal computer.<br />
			<br />
			I am currently studying english at Westminster Kingsway College in Victoria to improve my English proficiency and I am also working as Freelance Web Developer.<br />
			<br />
			If you have a project tell me about it,<br />contact me!
		</div>
	</section>
	
	<section id="contacts">
		<span class="title">Contact me</span><br />
		<?php
			if(isset($_GET["form"])){
				echo "<span style='color:brown;'>";
				switch($_GET["form"]){
					case "ok":
						echo "email sent correctly";
					break;
					case "err":
						echo "an error has occurred, please try again";
					break;
					case "inc":
						echo "form incomplete, email and text are required";
					break;
				}
				echo "</span>";
			}
		?>
		<form class="form_on_white" method="post" action="send_email.php">
			<ul>
				<li>
					<input type="text" name="firstName" placeholder="First Name" />
				</li><li>
					<input type="text" name="secondName" placeholder="Second Name" />
					<!--
					<label>First Name</label>
					<br />
					<br />
					<label>Second Name</label>
					-->
				</li><li>
					<input type="email" name="email" placeholder="Email (required)" required="required" />
				</li><li>
					<textarea name="text" placeholder="Your text (required)" required="required"></textarea>
				</li><li>
					<input type="submit" value="Submit" />
				</li>
			</ul>
		</form>
	</section>

	<section id="social">
		<?php
			$social_extension = "-64.png";
			$images = array(
				"github",
				"behance",
				"linkedin",
				"twitter"
			);
			$links = array(
				"//github.com/angelocovino",
				"//www.behance.net/angelocovino",
				"//it.linkedin.com/in/angelocovino",
				"//twitter.com/angelocovino90"
			);
			for($i=0; $i<count($images); $i++):
				echo "<a href='{$links[$i]}' target='_blank'><img src='{$images_path}{$images[$i]}{$social_extension}' /></a>";
			endfor;
		?>
	</section>
	
	<footer id="bottom_footer">
		<div id="copyright">&copy; 2014 - 2015 Angelo Covino</div>
		<div id="website_version">WebSite Version 2.0</div>
	</footer>
</body>
</html>