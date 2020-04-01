<?php

$host = 'db';
$user = 'devuser';
$password = 'devpassword';
$db = 'development';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo 'Connection failed' . $conn->connect_error;
}
echo "connected";