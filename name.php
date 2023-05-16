<?php 

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

session_start();
	$_SESSION;


	include("connect.php");
	include("functions.php");


	$user_data = check_login($conn);
     
?>   

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <title>Document</title>
     <style>
          body {
  margin: 50px;
}

.tabs {
  display: flex;
  flex-wrap: wrap;
  max-width: 450px;
  font-family: sans-serif;
}

.tabs__label {
  padding: 10px 16px;
  cursor: pointer;
}

.tabs__radio {
  display: none;
}

.tabs__content {
  order: 1;
  width: 100%;
  border-bottom: 4px solid #dddddd;
  line-height: 1.5;
  font-size: 0.9em;
  display: none;
}

.tabs__radio:checked + .tabs__label {
  font-weight: bold;
  color: black;
  border-bottom: 2px solid black;
}

.tabs__radio:checked + .tabs__label + .tabs__content {
  display: initial;
}
.text {
     font-size: 16px;
}

.close {
  position: absolute;
  cursor: pointer;
}

.button {
     bottom: 5000px;
     position: absolute;
}

.extra {
     font-size: 16px;
}

.container {
     display: none;
}

#captchaTxtArea{
  background: url(pictures/cap.png);
  color: #FF4500;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
  border: none;
  outline: none;
  margin-top: 15px;
  width: 135px;
  text-rendering: optimizeLegibility;
  font-family: 'Brush Script MT';
  color: black;  
  text-align: center;
}

.suggest {
     display: none;
}
     </style>
</head>
<body>
     <center>
     <div class="tabs">
          <input type="radio" class="tabs__radio" name="tabs-example" id="tab1" checked>
          <label for="tab1" class="tabs__label">Tab #1</label>
     <div class="tabs__content">
          <br>
                <p1 class="text">suggest jouw EIGEN tegelwijsheid!</p1>
     </div>
           <input type="radio" class="tabs__radio" name="tabs-example" id="tab2">
          <label for="tab2" class="tabs__label">Tab #2</label>
     <div class="tabs__content">
          <br>
                <p1 class="text">voorbeeld</p1>
                <img src="pictures/tegelwijs2.png"> 
     </div>
     <br><br>

     <!-- <p2 class="extra">CORRECT</p2> -->
 
</div>
<br>
<button class="close btn btn-primary" id="button" type="button">OK</button>


</div>

<div class="container">
<input type="text" name="tegelwijsheid" class="text" autocomplete="off" required
                placeholder="tegelwijsheid" required><br><br>
  <form name="form1">
     <bold>

    <input type="text" id="captchaTxtArea" name="text" value=""><br/><br>
    </bold>

    <!-- <img src="pictures/cap.png">  -->
    
    <input type="text" id="CaptchaEnter" placeholder="Enter The Captcha Code"><br/><br>

    <input class="btn btn-primary" type="button" value="REFRESH" id="refreshbtn" onclick="genNewCaptcha()"> 
    <input class="btn btn-primary" type="button" value="CHECK" id="checkbtn" onclick="checkCaptcha()">
    <br><br>

    <a class="suggest btn btn-link" href="suggested.php">suggest</a>

  </form>
</div>
     </center>

</body>

<script type="text/javascript">
          document.querySelector(".close").addEventListener
     ("click", function(){
          document.querySelector(".tabs").style.display = "none";
          document.querySelector(".close").style.display = "none";
          document.querySelector(".container").style.display = 'inline';
          

     })

         genNewCaptcha();

  var captcha, chars;

  function genNewCaptcha(){
    chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<6; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
  }

  function checkCaptcha(){
    var check = document.getElementById("CaptchaEnter").value;
    if(captcha == check){
     alert("Valid Captcha!!! WOO");
     document.querySelector(".suggest").style.display = 'inline';
      document.getElementById("CaptchaEnter").value = "";
    }else{
      alert("InValid Captcha!!! Please Try Again");
      document.getElementById("CaptchaEnter").value = "";
    }


  }
</script>
</html>