<?php
$servername = "localhost";
$username = "vishalmishra";
$password = "12345";

//connect to database
$conn = new mysqli($servername,$username,$password);

//check connection


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";






?>