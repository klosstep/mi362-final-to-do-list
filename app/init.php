<?php

$servername = "localhost";
$username = "stephhf6_user1";   
$password = "XXXXXXXXXXX"; // Hidden for security purposes  
$database = "stephhf6_todolist";   

// Create connection
$db = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<p class='connected'>Connected successfully &#10004</p>";

?>

