

<?php 

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

session_start();
	$_SESSION;


	include("connect.php");
	include("functions.php");



	$user_data = check_login($conn);

     echo $user_data['usertype'];
     
if($user_data['usertype'] == "admin") {
     header("Location: insert.php");
     
};



?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     
</body>
</html>

