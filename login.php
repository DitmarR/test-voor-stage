<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./CSS/login.css" />
<title id="title">Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
.yesnt {
     height: 10px;
     bottom: 600px;
     left: 830px;
     position: absolute;
}

.login--title {
     margin: 60px;
     top: 10px;
}

/* .sign-up {
     position: absolute;
     bottom: 490px;
     left: 935px;
} */


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
</head>
<body>
     <center>
          <div id="main">
               <div class="login">  
               <h1 class="login--title">𝗟𝗼𝗴𝗶𝗻</h1> 
               </div>
               <form method="post">
                <input type="text" name="username" class="text" autocomplete="off" required
                placeholder="naam"><br><br>
                <input type="password" name="password" class="text" required placeholder="wachtwoord"><br><br>
                <br>
               <input class="button" type="submit" name="submit" value="login" id="sub"><br><br>
               <br>
               <a href="signup.php" class="sign-up">Sign-In</a><br><br>
          </form>
     </div>
     </center>
  

</body>
</html>

<?php 

session_start();

	include("connect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$username = $_POST['username'];
		$password = sha1($_POST['password']);

          

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			$query = "select * from user where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: main.php");
						die;
					}
				}
			}
			
			echo "<div class='yesnt'>
               <div class='alert alert-danger' role='alert';>verkeerde naam of wachtwoord!
               </div>
               </div>";
		}else
		{
			echo "<p5 class='error'>verkeerde naam of wachtwoord!</p5>";
		}
	}

?>

