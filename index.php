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
	<link rel="shortcut icon" type="image/x-icon" href="icono.ico" />
	<link rel="stylesheet" type="text/css" href="html5reset.css" />
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400'>
	<link rel='stylesheet' type='text/css' href='stylesheet.css'>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
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
	<header id="top_gap">&nbsp;</header>
	<section id="upper_menu">
		<header id="banner">
			<!--
			<h1 id="logo"><img src="logo1.png" /></h1>
			-->
			<nav>
				<a href="#about">about me</a><a href="#portfolio">portfolio</a><a href="#contacts">contact</a>
			</nav>
		</header>
		<section id="headerone">
			<div class="big">Clarity, Simplicity, Beauty</div>
			<div class="less_big">New technologies, but warm old-fashioned eyes</div>
		</section>
		<a class="button" href="#contacts">work with me</a>
	</section>
	
	<section id="portfolio">
		<div class="title">most recent works</div>
		<ul>
			<li>
				<a href="//salvatorecatapanoarchitects.co.uk/" target="_blank"><img src="sca.jpg" /></a>
			</li><li>
			<!--
				<a href="//angelotm.altervista.org/liferesidential/index.html"><img src="angelotm.jpg" /></a>
			</li><li>
			-->
				<a href="//angelotm.altervista.org/portfolio_data/liferesidential/index.html" target="_blank"><img src="liferesidential.jpg" /></a>
			</li>
		</ul>
	</section>
	
	<section id="about">
		<div class="about_img">
			<img src="angelo.jpg" />
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
					<textarea name="text" placeholder="Your text (required)" required="required" /></textarea>
				</li><li>
					<input type="submit" value="Submit" />
				</li>
			</ul>
		</form>
	</section>

	<section id="social">
		<!--
		<span class="title">social</span><br />
		-->
		<a href="//github.com/angelocovino" target="_blank"><img src="github-64.png" /></a><a href="//it.linkedin.com/in/angelocovino" target="_blank"><img src="linkedin-64.png" /></a><a href="//twitter.com/angelocovino90" target="_blank"><img src="twitter-64.png" /></a>
	</section>
	
	<footer id="bottom_footer">
		&copy; 2014 - 2015 Angelo Covino
		<div style="padding:0.25em 0em; font-size:0.8em;">WebSite Version 2.0</div>
	</footer>
</body>
</html>