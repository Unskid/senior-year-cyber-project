<?php
include("web_config.php");
$_SESSION['points'] = 0;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Phineas and Ferb CTF</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header class="major">
					<h1>Welcome to <br><a href="https://en.wikipedia.org/wiki/Phineas_and_Ferb">Phineas and Ferb <a>CTF</h1>
					<p><a href="hints.php">Hints</a>| <a href="writeup.php">WriteUps</a> | <a href="points.php">Your points</a> | <a href="flag_submit.php">Submit a flag</a></p>
				</header>
				<div class="container">	
					<ul class="actions special">
						<li><a href="start.php" class="button primary scrolly" >start</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>How It works:</h2>
						</header>
						<p>First, you click on Download button, then you start hacking. <br> (Please use on virtual machine to avoid damage) <br>*Use for educational purposes only.</p>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Basic Skills required</h2>
						</header>
						<p>This challenge ain't easy, You should have basic knowledge in those fields:</p>
						<ul class="icons-grid">
							<li>
								<span class="icon solid major fa-camera-retro"></span>
								<h3>Reverse enginnering</h3>
							</li>
							<li>
								<span class="icon solid major fa-pencil-alt"></span>
								<h3>Web hacking</h3>
							</li>
							<li>
								<span class="icon solid major fa-code"></span>
								<h3>Crypto</h3>
							</li>
							<li>
								<span class="icon solid major fa-coffee"></span>
								<h3>Python coding</h3>
							</li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main special">
				<div class="container">
					<div class="content">
						<header class="major">
							<h2>One more thing</h2>
						</header>
						<p>Use for personal/educational purposes only. I am not responsible for any damage caused <br> GOOD LUCK!</p>
					</div>

				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>