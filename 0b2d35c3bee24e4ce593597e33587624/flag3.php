<?php
if(isset($_COOKIE["user_id"])){
 if($_COOKIE["user_id"] == "eccbc87e4b5ce2fe28308fd9f2a7baf3" || $_COOKIE["user_id"] == "c4ca4238a0b923820dcc509a6f75849b"){
    echo "<h1> Congratulations! Here's your flag!</h1> <br> CTF{B3LgIt_H^J3C7}";
    echo "<br>But,There's one flag left.<br> I wonder if There's any DOR we can break into, a DOR which help us let all the victims free.  Perry, we count on you.";
    echo '<br> maybe there is an admin panel?<br>';
    echo "<img src='static/perry-the-platypus-hat.gif'/>";
 }
}
 else{
     echo "Nice try kid. You have a whole challenge ahead of you.";
 }
?>