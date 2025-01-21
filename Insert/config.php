<?php

    header('Access-Control-Allow-Origin:*');
    header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT, OPTIONS");
    header('Access-Control-Allow-Headers: token,Content-Type');
    header('Access-Control-Control-Max-age:1728000');
    header('Content-Length:0');
    header('Content-Type:text/plain');
    header("Content-Type: application/json");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_insert";

    $conn =  new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้:".$conn->connect_error);
    }

?>