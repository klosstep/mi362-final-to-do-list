<?php

require("app/init.php");

if( isset($_GET['del'])) {
  $del = $_GET['del'];
  $SQL = "DELETE FROM tasks WHERE ID='$del'";

  if (mysqli_query($db, $SQL)) {
    header('Location: index.php');  
  } else {
    echo "<p>There has been an error removing the task.</p>";
  }
}