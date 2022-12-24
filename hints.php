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
                    <h1>Hints</h1>
                    <p>Every hint decreases you 5 points</p>
                </header>
                <div class="container">
					<ul class="actions special">
						<li><a onclick="getHint()" class="button primary scrolly">Get Hint</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Flag1:</h2>
                        </header>
						<p id="hint1">Nothing scares this hacker... except POODELS.</p>
                        <p id="hint2">Doing this by hand will take forever! is there any way to automate it? maybe some snake will help...</p>
                        <p id="hint3">hacker101 crypto attacks lectures may help</p>
					</div>
				</div>
			</section>

        <!-- Two -->
        <section id="two" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Flag2:</h2>
						</header>
						<p id="hint4">This hacker is full of shit. show him how's the boss. HACK BACK.</p>
                        <p id="hint5">All you have is exe, what can you do?</p>
                        <p id="hint6"><a href="https://www.youtube.com/watch?v=I8ijb4Zee5E&ab_channel=VicMensaVEVO">I love this song! espacially the chorus</a></p>
					</div>
				</div>
            </section>
            <section id="three" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Flag3:</h2>
						</header>
						<p id="hint7">Where did you download the file?</p>
                        <p id="hint8">You have a name and a password, but where can you use it?</p>
                        <p id="hint9">Get a cup of coffee and let it run by itself</p>
					</div>
				</div>
            </section>
            <section id="four" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Flag4:</h2>
						</header>
                        <p id="hint10">I wonder if theres any DOR to the flag</p>
                        <p id="hint11"> the answer is in the hint above. KISS BRUH:) </p> 
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
            <script>
                //hide all the hints
                for(let x=1;x<12;x++){
                    console.log("hint"+x.toString());
                    document.getElementById(("hint"+x.toString())).style.display = "none";
                }
                function getHint(){
                    if(localStorage.getItem("hints") < 12){
                    document.getElementById("hint"+(parseInt(localStorage.getItem("hints"))+1).toString()).style.display = "block";
                    <?php $_SESSION['hints'] +=1; ;?> 
                    localStorage.setItem("hints",parseInt(localStorage.getItem("hints"))+1);
                    }
                }
                //loop that's retrives the already asked hints
				for(let i =1;i<parseInt(localStorage.getItem("hints"))+1;i++){
					document.getElementById(("hint"+i.toString())).style.display = "block";
				}
			</script>
	</body>
</html>