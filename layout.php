<?php require("inc/doctype.php") ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link rel="stylesheet" type="text/css" href="styles/nav.css" />
	
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	
	<!-- Include jQuery Library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<!-- jQuery Cycle Plugin from http://jquery.malsup.com/cycle/basic.html	 -->
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {		
		$('#quotes').cycle({
			timeout: 5000,
			cleartype: 1,
			speed: 300,
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	});
	</script>
	<!-- End script for rotating images -->
	
	<title>Young Yu</title>

</head>
<body>
	<div id="everything">
		<div id="left-wrap">
			<div class="banner">
				<a href="index.php" title="Home"><img class="banner" src="images/yu-chinese-cursive.png"  onmouseover="this.src='images/yu-chinese-cursive-inverted.png'" onmouseout="this.src='images/yu-chinese-cursive.png'"alt="Yu" /></a>
			</div>
			<div class="left-nav">
			
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
						<a id="twitter" href="https://twitter.com/youngalexyu" title="For updates on my life">Twitter</a>
					</div>
				</div>
				<div class="border">
				</div>
			</div>
			
			<div id="main-content">
				
			</div>
		</div>	
		<div id="copyright">
			Copyright &copy; 2012 Young Yu 
		</div>
	</div>
</body>
</html>