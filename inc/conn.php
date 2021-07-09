<?php

    //define host
    $host = "localhost";
    //define username
    $username ="root";
    //define password
    $password ="";
    //define database
    $database ="BlogApp";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
         die("Database connection failed" . mysqli_connect_error());
    }
    else{
        //echo "Database connection success!!";
    }

?>