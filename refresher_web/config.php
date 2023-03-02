<?php 
    // setting up connection to database
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', "users");

    $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    // test connection
    if($link === false){
        die("ERROR: Could not connect!" .mysqli_connect_error());
    }else{
        echo "connected";
    }
?>

   