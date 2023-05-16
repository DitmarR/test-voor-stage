
<?php 

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

session_start();
	$_SESSION;


	include("connect.php");
	include("functions.php");


	$user_data = check_login($conn);
    $_SESSION['user_id'] 


?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" herf="main.css">
    <title>Insert</title>

    <style media="screen">
        input {
            padding: 8px;
            height: 20px;
        }
        
        button {
            padding: 7px;
            height: 38px;
        }
        
        fieldset {
            margin-bottom: 23px;
            position: relative;
            margin-right: 800px;
        }
        .btn2 {
            position: relative;
            left: 380px;
            top: 2px;
            padding-bottom: 20px;
        }

        p {
            position: relative;
            left: 20px;
            top: 140px;
            color: grey;
            
        }

        .color {
            color: black;
            height: 60px;
            margin-right: 50px;
            margin-bottom: 120px;
        }

        .back {
            font-size: 18px;
        }
    </style>
</head>
<body>  
 <div class="info">
    <p id="example">for example: NR 1</p>
    <p id="test">if a number is taken it'll replace the current text</p>

 </div>

<fieldset class="field1">
    <legend>
        Insert Data
    </legend>
    <input id="inpKey" type="text" placeholder="Nummer">
    <input id="inpValue" type="text" placeholder="Wijsheid">
    <button type="button" id="btnInsert">&nbsp;Insert&nbsp;</button>
    <div class="btn2">
        <button type="button" id="btnRemove">Remove</button>
    </div>
</fieldset>
     
<fieldset class="field2">
    <legend>
        Local Storage
    </legend>
    <tr>
        <td>
            <center>
    <div id="lsOutput" class="color"></div>
    </center>
    </td>
    </tr>
</fieldset>

    <a href="main.php" class="back">back</a>

 
</body>

<script type="text/javascript" src="tegelwijs.js"></script>

<script>





</script>
</html>