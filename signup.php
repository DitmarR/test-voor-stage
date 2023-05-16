<?php 
session_start();

	include("connect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$username = $_POST['username'];
		$password = $_POST['password'];
          $password = sha1($password).$salt;
          $email = $_POST['email'];
          $usertype['usertype'] = "user";
        

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

		
			$user_id = random_num(20);
			$query = "insert into user (user_id,username,password,email) values ('$user_id','$username','{$password}','$email')";

			mysqli_query($conn, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<div class='danger-alert'>
               <div class='alert alert-danger' role='alert';>invalid!
               </div>
               </div>";
		}
	}

     
?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title id="title">Sign-In</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style type="text/css">

     .text {
          border-radius: 5px;
          border: solid thin #aaa;
          padding: 10px;
          margin: 4px;
     }

     .button {
          border-radius: 5px;
          border: solid thin #aaa;
          padding: 10px;
          margin: 4px;
          cursor: pointer;
     }

     body {
     background-color: lightblue;
     }

</style>
<body>
     <!-- <?php include "header.php" ?> -->
     <br><br> <br><br> <br><br>   
     <center>

               <h1 id="Sign--in--title">𝐒𝐢𝐠𝐧 <span>𝐢𝐧</span></h1><br><br>

          <div id="main">
          <form method="POST">
                <input type="text" name="username" class="text" autocomplete="off" required
                placeholder="username"><br><br>
                <input type="email" name="email" class="text" required placeholder="email" autocomplete="off"><br><br>
                <input type="password" name="password" class="text" required placeholder="password"><br><br>
                <input type="password" name="password" class="text" required placeholder="repeat password"><br><br>
                <br>
               <input class="button" type="submit" name="submit" value="sign-up" id="sub"><br><br>
               <br>
          </form>
          <div>
          <a class="login--page" href="login.php">or login</a>
     </div>
     </div>
     </center>
  
     
</body>
</html>