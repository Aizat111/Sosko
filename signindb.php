<?php
    $username=$_POST["username"];
    $password=$_POST["password"];

    $mysqli= new mysqli("localhost:3307","root","","test");
    if($mysqli->connect_errno)
    {
        printf("Connect failed: %s <br />\n",$mysqli->connect_error);
        exit();
    }
    $mysqli->query("INSERT INTO `users`(`Username`, `Password`) VALUES ('$username','$password')");
    echo "Kayit basarili";
    ?>