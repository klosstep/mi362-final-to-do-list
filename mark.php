<?php 

require("app/init.php");

if(isset($_GET['as'], $_GET['task'])) {
  $as   = $_GET['as'];
  $task = $_GET['task'];

  switch($as) {
    case 'done':

      $SQL="UPDATE tasks SET done='1' WHERE ID=':task' ";

      if (mysqli_query($db, $SQL)) {
        header('Location: index.php');  
      } else {
        echo "<p>There has been an error changing the task from active to comepleted.</p>";
      }

      break;

    case 'active':

      $SQL="UPDATE tasks SET done='0' WHERE ID=':task' ";

      if (mysqli_query($db, $SQL)) {
        header('Location: index.php');  
      } else {
        echo "<p>There has been an error changing the task from completed to active.</p>";
      }

      break;
  }
}