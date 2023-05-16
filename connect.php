<?php
     
     $serverName = "localhost";
     $dBusername = "root";
     $dBpassword = "";
     $dBName = "userslogin";
     

    $conn = mysqli_connect($serverName,$dBusername,$dBpassword,$dBName);

    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
    else
     echo "";
     



