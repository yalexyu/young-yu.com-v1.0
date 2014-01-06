<?php require("inc/doctype.php") ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link rel="stylesheet" type="text/css" href="styles/nav.css" />
	<link rel="stylesheet" type="text/css" href="styles/portfolio.css" />
	
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	
	<!-- Include jQuery Library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<!-- jQuery Cycle Plugin from http://jquery.malsup.com/cycle/basic.html	 -->
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
	<!-- End script for rotating images -->
	
	<title>Young Yu - Portfolio</title>

</head>
<body>
	<div id="everything">
		<div id="left-wrap">
			<div class="banner">
				<a href="index.php" title="Home"><img class="banner" src="images/yu-chinese-cursive.png"  onmouseover="this.src='images/yu-chinese-cursive-inverted.png'" onmouseout="this.src='images/yu-chinese-cursive.png'" alt="Yu" /></a>
			</div>
			<div id="left-nav">
				<h1>Portfolio</h1>
				<h2>Current</h2>
				<div id="current-projects">
					<!-- <a href="#mywebsite">Personal Website</a> -->
				</div>
				<h2>Completed</h2>
				<div id="completed-projects">
					<a href="#drjoseph">Dr. Danny Joseph, DDS</a>
				</div>
			</div>
		</div>
		<div id="right-wrap">
			<div id="fixed-wrap">
				<div id="title-nav-wrap">
					<div id="title">
						<span>
							Young A. Yu
						</span>
					</div>
					<div id="nav">
						<ul>
							<li>
								<a href="portfolio.php" title="Portfolio">Portfolio</a>
							</li>
							<li>
								<a href="experience.php" title="Experience">Experience</a>
							</li>
							<li>
								<a href="academics.php" title="Academics">Academics</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="small-title-wrap">
					<a id="e-mail" href="mailto:yay5@cornell.edu">yay5@cornell.edu</a>
					<div id="social-media">
						<a id="facebook" href="http://www.facebook.com/young.alex.yu" title="Only if I know you">Facebook</a>
						<a id="twitter" href="http://www.twitter.com/youngalexyu/" title="For updates on my life">Twitter</a>
					</div>
				</div>
				<div class="border">
				</div>
			</div>
			<div id="main-content">
			<!-- Start Portfolio -->
				<!--
				<div class="project" id="mywebsite">
					<span class="title">Personal Website</span>
					<p class="description">Young A. Yu (Dec 2012 - Present)</p>

					<script type="text/javascript">
						$('#gallery1').cycle({ 
							fx: 'fade', 
							speed: 600, 
							timeout: 5000, 
							next: '#next1', 
							prev: '#prev1' 
						});
					</script>
					<div id="gallery1" class="gallery">
					</div>
					<span class="caption">
						I was responsible for all of the design, CSS, and some PHP/JS for this project.
					</span>
					<span class="caption">
						The live site can be found here.
					</span>
				</div>
				-->
				<div class="project" id="drjoseph">
					<span class="title">Dr. Danny Joseph, DDS.</span>
					<p class="description">Introduction to Web Design and Programming, Fall 2012</p>
					<!-- Start script for #drjoseph -->
					<script type="text/javascript">
						$('#gallery2').cycle({ 
							fx: 'fade', 
							speed: 600, 
							timeout: 5000, 
							next: '#next1', 
							prev: '#prev1' 
						});
					</script>
					<div id="gallery2" class="gallery">
						<img src="images/portfolio/drjoseph1.png" alt="Portfolio Image, Dr. Danny (1)" />
						<img src="images/portfolio/drjoseph2.png" alt="Portfolio Image, Dr. Danny (2)"/>
						<img src="images/portfolio/drjoseph3.png" alt="Portfolio Image, Dr. Danny (3)"/>
					</div>
					<span class="caption">
						I was responsible for all of the HTML/CSS and some PHP/JS for this project.
					</span>
					<span class="caption">
						The live site will be coming soon.
					</span>
				</div>
			<!-- End Portfolio -->
			</div>
		</div>
		<div id="copyright">
			Copyright &copy; 2012 Young Yu 
		</div>
	</div>
</body>
</html>