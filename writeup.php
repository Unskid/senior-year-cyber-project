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
                    <h1>Write Ups</h1>
                    <p>Here there're write ups to the challenge (For Script Kids only)</p>
                    <p><a href="hints.php">Hints</a>| <a href="index.php">Home</a> | <a href="points.php">Your points</a> | <a href="flag_submit.php">Submit a flag</a></p>
                </header>
			</section>

		<!-- One -->
			<section id="one" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Flag1:</h2>
                        </header>
                        <iframe src="https://www.youtube.com/embed/uagOkqjGZZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p>Vurnability covered: Reverse engineering</p>
                        <p>Tools used : <a href="https://www.red-gate.com/products/dotnet-development/reflector/">.netReflector</a> </p>
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
                        <iframe src="https://www.youtube.com/embed/uagOkqjGZZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						<p>Vurnability covered: XOR keyReuse</p>
                        <p>Tools used: <a download href="writeups/xor.py">Xor decryption tool</a></p>
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
						<iframe src="https://www.youtube.com/embed/uagOkqjGZZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						<p>Vurnability covered: bot allowing </p>
                        <p>Tools used: <a href="https://github.com/KajanM/DirBuster">Dirbuster</a> | <a download href="writeups/dirbuster.py">Custom made dirbuster tool</a> </p>
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
                        <iframe src="https://www.youtube.com/embed/GWE5mJEIJM0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						<p>Vurnability covered: <a href="https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/05-Authorization_Testing/04-Testing_for_Insecure_Direct_Object_References">"insecure direct object references"</a></p>
                        <p>Tools used: <a href="https://github.com/KajanM/DirBuster">DirBuster</a>, <a href="https://chrome.google.com/webstore/detail/cookie-editor/hlkenndednhfkekhgcdicdfddnkalmdm">Cookie editor chrome extension</a></p>
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