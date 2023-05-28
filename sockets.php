<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sockets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>  
    <main>
        <form method="post">
            <h1 id="headline">**Please stay on this page until you find the first 2 flags of the challenge**</h1>
            <button onclick="changeText()" id="button" type="submit" name="run_code" value="Start The challenge">Start The challenge</button>
        </form>
    </main>

    <script>
        const headline = document.getElementById("headline");
        const button = document.getElementById("button");
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
