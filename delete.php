<?php 

require("app/init.php");

if(isset($_POST['delete'])) {
  $delete="DELETE FROM tasks";

  if (mysqli_query($db, $delete)) {
    header('Location: index.php');  
  } else {
    echo "<p>There has been an error clearing the tasks.</p>";
  }
}