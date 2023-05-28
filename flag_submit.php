<?php
include("web_config.php");
include('./0b2d35c3bee24e4ce593597e33587624/sql_config.php');
$message = "";

//$_SESSION['flags'] = array("not found","not found","not found","not found"); // הולכת להיות עם זה בעיה - תיזהר
function findFlagAndChange($flag_id){
    $_SESSION['flags'][$flag_id-1] = "found";
}
if (isset($_POST['submit'])) {
    $fvalue = $_POST['flag'];
    $query = $connection->prepare("SELECT * FROM `flags` WHERE value=:value");
    $query->bindParam("value", $fvalue, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result){
      if ($fvalue == $result['value'] && $_SESSION['flags'][$result["ID"]-1] == "not found"){
          $_SESSION['points'] += $result['points'];
          findFlagAndChange($result['ID']);
          $message = "<p style='color:green;'>success! +".$result['points']."</p>";
          
      }
      else if ($_SESSION['flags'][$result["ID"]-1] == "found"){
        $message = "<p style='color:red;'>Flag was already found, nice try</p>";
      }
    }
    else{
        $message = "<p style='color:red;'>Invalid Flag, Keep trying</p>";
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Phineas and Ferb CTF</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header class="major">
          <h1>Submit A flag</h1>
        </header>
        <div class="container">
      <form class="form" method="POST" action="#">
        <div class="input-group">
          <label for="username">Flag</label>
          <input type="text" id="username" name="flag" placeholder="Submit your flag">
          <input type="hidden" name="submit"/>
        </div>
        <button class="button">Submit Flag</button>
      </form>
      <h3 class="signup-header">Flags looks like: CTF{THIS_iS_an_example}</h3> 
      <h4 class="signup-header"><?php echo $message."<br>"."You have ".$_SESSION['points']." points"; ?></h4>
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