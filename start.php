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
					<p class="typewriter-text"></p>
				</header>
				<div class="container">	
				<h4 id="headline">**Please stay on this page until you find the first 2 flags of the challenge**</h4>
					<ul class="actions special">
					    <li id="download_btn"><a href="0b2d35c3bee24e4ce593597e33587624/meow.exe" class="button primary scrolly" download>Download</a></li>
						<form method="post">
							<li id="start_btn" style="display:none;"><button onclick="changeText()" type="submit" name="run_code" class="button primary scrolly" >Start Challenge</button></li>
        				</form>
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
				const storyElements = [
				{
					type: "text",
					content: `Hey Perry it's your boss, we suspect that Doofensmirtch is trying to take over the world again. only you can save us perry! 
					click the download button to see the virus he used to take over inoccent people's computers...`
				},
			];

			const typewriterContent = document.querySelector(".typewriter-text");
			let currentIndex = 0;
			let currentTextIndex = 0;

			function typeWriter() {
				if (currentIndex < storyElements.length) {
					const currentElement = storyElements[currentIndex];

					if (currentElement.type === "text") {
						if (currentTextIndex < currentElement.content.length) {
							typewriterContent.textContent += currentElement.content.charAt(currentTextIndex);
							currentTextIndex++;
							setTimeout(typeWriter, Math.random() * 100 + 20); // Random typing speed between 50ms and 250ms
						} else {
							currentIndex++;
							currentTextIndex = 0;
							typewriterContent.appendChild(document.createElement("br"));
							typeWriter();
						}
					} else if (currentElement.type === "image") {
						const img = document.createElement("img");
						img.src = currentElement.content;
						img.alt = currentElement.alt;
						img.style.width = "100%";
						img.style.maxWidth = "400px";
						typewriterContent.appendChild(img);
						currentIndex++;
						typeWriter();
					}
				}
			}
			typeWriter();
			const download_btn = document.getElementById("download_btn");
			const start_btn = document.getElementById("start_btn");
			download_btn.addEventListener("click", ()=>{
				start_btn.style.display = "block";
				download_btn.style.display = "none";
			});

			const headline = document.getElementById("headline");
        	function changeText(){
            	headline.textContent = "**The challenge started let the page load while you solve it**"
        	}
            </script>
	</body>
</html>
<?php
// set some variables
if (isset($_POST['run_code'])) {

$host = "0.0.0.0";
$port = 8080;

// don't timeout!
set_time_limit(0);

// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");

// bind socket to port
$result = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");

// start listening for connections
$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");

// accept incoming connections
// spawn another socket to handle communication
$spawn = socket_accept($socket) or die("Could not accept incoming connection\n");

// send the data
$output = "CTF{Xor_K3y_Reu2e} \n There's a secret project I created, an evil baljit. In case I forget my credntials: user: evil_baljit password: i am secretly in love with ferb";

socket_write($spawn, $output, strlen ($output)) or die("Could not write output\n");
// clean up input string

echo "The closer you look, the less you see.";

// close sockets
socket_close($spawn);
socket_close($socket);
}

?>