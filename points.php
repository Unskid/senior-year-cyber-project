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
					<h1>Your Points : <?php echo $_SESSION['points'] - ($_SESSION['hints'] * 5);?></h1>
                    <p>Flag1 : <?php echo $_SESSION['flags'][0] ?> | Flag2: <?php echo $_SESSION['flags'][1] ?> | Flag3: <?php echo $_SESSION['flags'][2] ?> | Flag4: <?php echo $_SESSION['flags'][3] ?></p>
                    <p><a href="hints.php">Hints taken</a> : <?php echo $_SESSION['hints']; ?></p>
                </header>
                <div class="container">
					<ul class="actions special">
						<li><a href="index.php" class="button primary scrolly">resume challenge</a></li>
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

	</body>
</html>