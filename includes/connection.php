<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bronx';

// creating connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

function sanitize($connectionString, $data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    $data = mysqli_real_escape_string($connectionString, $data);

    return $data;
}





?>