
<?php 

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

session_start();
	$_SESSION;


	include("connect.php");
	include("functions.php");
    // include("access.php");


	$user_data = check_login($conn);
    
    if($user_data['usertype'] == "admin") {
        echo "<a href='admin.php'>Admin page</a>";
        
   };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>wijshedentegels</title>
</head>
<body>
    <center>
    <main>
        <h1 id="wijsheden">wijsheden test</h1>     
    </main>
    

<img src="pictures/tegelwijs.png"> 


    <div class="wijs">
        <span style="color:blue; position: absolute; left: 745px;
        top: 315px;   text-align: center; font-size: 40px; width: 300px;" id="cont">wijsheden font test</span>
    </div>
    </center>
 
    <meta http-equiv="refresh" content="30"> 

    <!-- <img src="" class="wijsheid"> -->

 

<div>


    <a class="herf " id="name" href="name.php">name</a>
</div>
</body>

<a class="herf" id="logout" href="logout.php">Logout</a>

<script src="tegelwijs.js"></script>
</html>