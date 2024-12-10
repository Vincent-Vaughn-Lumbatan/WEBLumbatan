<?php
$servername = "localhost";
$username = $_POST['username']
$feedback = $_POST['feedback']
$dbname = "test";

$conn = new mysqli($servername, $username, $feedback, $dbname);

if (!empty($username) || !empty($feedback)){
    $username = $_POST["username"];
    $feedback = $_POST["feedback"];
    $dbname = "test";
}
else {
    echo "Please fill in all fields";
    die();
}





