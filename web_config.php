<?php 
if(session_status() != 0) session_start();
if(!isset($_SESSION['points'])){
    $_SESSION['points'] = 0;
}
if (!isset($_SESSION['flags'])){
    $_SESSION['flags'] = array("not found","not found","not found","not found","not found"); //הולכת להיות בעיה עם זה תיזהר
}
if (!isset($_SESSION['hints'])){
    $_SESSION['hints'] = 0;
}
if (isset($_SESSION['hints'])){
    if($_SESSION['hints'] > 11){
        $_SESSION['hints'] = 11;
    }
}
?>
<script>
    if(!localStorage.hints){
        localStorage.setItem("hints",0);
    }
</script>
            