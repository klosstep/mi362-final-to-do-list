<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>To-Do List</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/custom.css">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>

    <body>
      <div class="container">

        <!-- Connected successfully -->
        <?php require("app/init.php"); ?>

        <!-- Notepad Container -->
        <div id="notepad">
          <div id="header">

            <!-- Title -->
            <div class="col-sm-9 col-xs-8">
              <div id="title">To-Do List</div>
            </div>

            <!-- Clear Tasks -->
            <div class="col-sm-3 col-xs-4">
              <form class="item-del" action="delete.php" method="post">
                <button type="submit" name="delete" class="btn btn-danger delete">Clear Tasks</button>
              </form>
            </div>
          </div>

          <!-- Task List -->
          <ul id="list">
            <form action="index.php" method="post">
              <?php
                $SQL="SELECT * FROM tasks";
                $result = mysqli_query($db, $SQL) or die("Could not complete your query"); 
                $num_rows = mysqli_num_rows($result);

                while ($row = mysqli_fetch_array($result))  {
                  $task = $row['Task_Name'];
                  $done = $row['Done'];
                  $id = $row['ID'];
                  echo "<li><a href='remove.php?del=$id' name='remove'><i class='fa fa-times'></i></a>$task</li>";

                  /* 
                  <a href='mark.php?as=done&task=$id>Finished?</a><
                  if($id == '0') {
                    echo "<li>$task<a href='mark.php?as=done&task=$id>Finished?</a></li>";
                  }
                  else {
                    echo "<li>$task<a href='mark.php?as=done&task=$id>Activate?</a></li>";
                  }
                  */
                }
              ?>
            </form>
          </ul>

          <!-- Add Task -->
          <form class="add-task" action="add.php" method="post">
            <div class="row">
              <div class="col-md-8">
                <input type="text" name="name" placeholder="What needs to be done?" class="input" autocomplete="off" required>
              </div>
              <div class="col-md-4">
                <button type="submit" name="submit" class="btn btn-primary submit">Add Task</button>
              </div>
            </div>
          </form>

          <!-- Total Tasks -->
          <?php echo "<p id='total-tasks'>Total Tasks = <b>$num_rows</b></p>"; ?>

        </div>
      </div><!-- end container -->
    </body>
</html>