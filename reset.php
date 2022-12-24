<?php
include("web_config.php");
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
					<h1 id="reset">Reset Challenge</h1>
				</header>
				<div class="container">
					<ul class="actions special">
						<li><a onclick="reset()" class="button primary scrolly">RESET?</a></li>
					</ul>
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
            <script>
                function reset(){
                    document.getElementById("reset").textContent = "Reseting challenge...";
                    <?php session_destroy(); ?>
                    localStorage.setItem("hints",0);
                    location.href = "index.php";
                }
            </script>
	</body>
</html>