<?php
    include("DBconnect.php");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
<h1 class="naw">Add new task</h1>

<h3 id="xxx">Enter your task</h3>
<form method="post" id="vv">
<textarea id="newusertask" name="dd"></textarea>
<input type="submit" name="submit" value="✔" class='done' > 
<input type="reset" name="clear" value="✗" class='notdone' > 

</form>
<button id="oldtask" onclick="window.location.href='homepage.php'">🏠︎</button>
</body>
</html>

<?php

    $sql="";
    if(isset($_POST['submit'])){
        if(!empty($_POST['dd'])){
            $tt=$_POST['dd'];
          $sql="INSERT INTO tasks (task) VALUES ('{$tt}')"  ;
          mysqli_query($conn,$sql);
          echo "added";
        }
    }


    mysqli_close($conn);
?>