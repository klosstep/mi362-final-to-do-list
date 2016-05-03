<?php 

require("app/init.php");

if(isset($_POST['name'])) {
  $name = trim($_POST['name']);

   $SQL="INSERT INTO tasks (Task_Name) VALUES ('$name')";

  if (mysqli_query($db, $SQL)) {
    header('Location: index.php');  
  } else {
    echo "<p>There has been an error adding a task.</p>";
  }
} 


