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
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit Flag</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
      *,
*::before,
*::after {
  box-sizing: border-box;
  padding: 0;
}

body {
  margin: 0;
  font-family: "Open Sans", sans-serif;
}

.fullscreen-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  width: 100vw;
  background: linear-gradient(53deg, rgba(25,191,203,1) 6%, rgba(188,81,218,1) 61%);

}

.login-container {
  width: 50%;
  max-width: 400px;
  min-width: 300px;
  padding: 50px 25px 20px;
  background: white;
  border-radius: 10px;
}

.header {
  text-align: center;
}

.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-top: 50px;
}

.input-group {
  display: flex;
  flex-direction: column;
  gap: 10px;
  font-size: .8rem;
}

.input-group input {
  font-size: .9rem;
  padding: 10px;
  border: none;
  outline: none;
  border-bottom: 2px solid hsl(0, 0%, 83%);
}

.input-group input:focus {
  box-shadow: 0 0 0 1px hsl(178, 100%, 50%);
  border-bottom: 2px solid hsl(0, 0%, 83%, 0%);
}

.button {
  margin: 20px 0;
  padding: 10px 0;
  border-radius: 25px;
  border: none;
  outline: none;
  cursor: pointer;
  background: linear-gradient(53deg, rgba(25,191,203,1) 6%, rgba(188,81,218,1) 73%);
  color: white;
  font-size: 1rem;
}

.button:focus {
  box-shadow: 0 0 0 1px hsl(178, 100%, 50%);
}

.signup-header {
  text-align: center;
  font-weight: 200;
  font-size: .9rem;
  margin-top: 75px;
}

.social-icons {
  margin-top: 20px;
}

.social-list {
  list-style: none;
  display: flex;
  justify-content: center;
  gap: 10px;
}

.social-links {
  text-decoration: none;
}

.fa-brands {
  font-size: 1.75rem;
}

.fa-facebook {
  border-radius: 50%;
  background: white;
  color: #435892;
}

.fa-twitter {
  border-radius: 50%;
  padding: px;
  color: #4AA0E8;
  background-color: white;
}

.fa-google {
  color: #D64E44;
}
</style>
<body>
  <div class="fullscreen-container">
    <div class="login-container">
      <h1 class="header">Flag Submit</h1>
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
  </div>
</body>
</html>
