<?php
    include('sql_config.php');
    $is_admin = false;
    if(session_status()!= PHP_SESSION_ACTIVE) session_start();
    if(isset($_COOKIE['user_id'])){
    if($_COOKIE['user_id'] == md5("1")){
        $is_admin = true;
        $query = $connection->prepare("SELECT * FROM `victims`;");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        //print_r($result);
        foreach($result as $re){
        }
    }
    else {
      echo "<h1>You are not admin!</h1>";
    }
  }
    else {
      echo "<h1>Nice Try kiddo</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <style>
*{
font-family: 'Roboto', sans-serif;
}


/*//////////////////////////////////////////////////////////////////
[ FONT ]*/


@font-face {
  font-family: OpenSans-Regular;
  src: url('../fonts/OpenSans/OpenSans-Regular.ttf'); 
}



/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: sans-serif;
}

/* ------------------------------------ */
a {
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
	outline: none;
	border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

/* ------------------------------------ */
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}




/*//////////////////////////////////////////////////////////////////
[ Utiliti ]*/






/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #c850c0;
  background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
  background: -o-linear-gradient(45deg, #4158d0, #c850c0);
  background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
  background: linear-gradient(45deg, #4158d0, #c850c0);

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1170px;
}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

.column1 {
  width: 260px;
  padding-left: 40px;
}

.column2 {
  width: 160px;
}

.column3 {
  width: 245px;
}

.column4 {
  width: 110px;
}

.column5 {
  width: 170px;
  text-align: right;
}

.column6 {
  width: 222px;
  text-align: right;
  padding-right: 62px;
}


@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 24px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: OpenSans-Regular;
    font-size: 14px;
    color: #999999;
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Date";
  }
  table tbody tr td:nth-child(2):before {
    content: "Order ID";
  }
  table tbody tr td:nth-child(3):before {
    content: "Name";
  }
  table tbody tr td:nth-child(4):before {
    content: "Price";
  }
  table tbody tr td:nth-child(5):before {
    content: "Quantity";
  }
  table tbody tr td:nth-child(6):before {
    content: "Total";
  }

  .column4,
  .column5,
  .column6 {
    text-align: left;
  }

  .column4,
  .column5,
  .column6,
  .column1,
  .column2,
  .column3 {
    width: 100%;
  }

  tbody tr {
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .container-table100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}
.main-container{
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
}

.main-header{
color:#8FE3CF;
  font-size:25px;
  line-height:40px;
}

.button a{
  font-size:16px;
  line-height:28px;
  text-decoration:none;
  background-color:#000;
  padding:7px 15px;
  text-transform:uppercase;
  color:#fff;
  border-radius:5px;
}

.modal-design{
  position:fixed;
  left:15px;
  right:15px;
  top:15px;
  bottom:15px;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  visibility:hidden;
  opacity:0;
  transition:all 0.3s;
  background:#256D85;
 
  color:#fff;
  text-align:center;
}

.modal-design:target{
visibility:visible;
  opacity:0.95;
  transition:all 0.3s;
}

.close-modal{
  background-color:#002B5B;
  padding:5px 15px;
  color:#fff;
  font-size:18px;
  line-height:28px;
  text-decoration:none;
  text-transform:uppercase;
  color:#fff;
}

.footer span{
  float:right;
  font-size:12x;
  line-height:28px;
  color:#256D85;
}
  </style>
  <body>
  <div>
  <?php if($is_admin):?>
    <div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<h1 style="color:white;">  Welcome Doofenshmirtz <br> This is all the victims you have catched: </h1>
<div class="table100">
<table>
<thead>
<tr class="table100-head">
<th class="column1">ID</th>
<th class="column2">Name</th>
<th class="column3">Region</th>
<th class="column4">computer_ip</th>
</tr>
</thead>
<tbody>
<tr>
<?php foreach($result as $resu=>$value):?>
<td class="column1"><?=$value; ?></td>
<?php endforeach;?>

</tr>

</tbody>
</table>
<div class="main-container">
  <div class="button">
    <a href="#openModal">Self Destruction</a>
  </div>
  <div id="openModal" class="modal-design">
    <div>
      <h2 id="title">Are you sure you want to self destruct?</h2>
      <img src="./static/sd.gif" class="sd_img"/>
      <a href="#" class="close-modal">No</a>
      <button onclick=showFlag() class="close-model" id="success">Yes</button>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
</div>
  </body>
  <script>
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }
    function showFlag(){
        if(getCookie("user_id") == "c4ca4238a0b923820dcc509a6f75849b"){
            console.log(getCookie("user_id"));
            document.getElementById("success").textContent = "CTF{Thanx_4_p4In}";
            document.getElementById("title").textContent = "Thank You Perry! You've saved us again."
        }
    }
  </script>
  <?php endif;?>
</html>