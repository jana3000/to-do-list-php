<?php
    include("DBconnect.php");
    $sql="select id,task from tasks where status=1";
    $ongoing=mysqli_query($conn,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
<h1 class="naw">To Do List</h1>
<h3 class="heading">Tasks</h3>
<div class="container">
    <?php
        while($row=mysqli_fetch_assoc($ongoing)){
            echo "<div class='eachtask'>";
                echo "{$row['task']}";
              echo "<div class='buttonbox'>";  

                echo "<form method='post'><button class='add' name='addd' value='{$row['id']}'>✔</button></form>";
                echo "<form method='post'><button value='{$row['id']}' name='dell'class='del'>✗</button></form>";
              echo "</div>";
            echo "</div>";
        }

    ?>
</div>

<button id="newtask" onclick="window.location.href='addtask.php'" >+</button>
<button id="oldtask" onclick="window.location.href='completedtasks.php'">✔</button>

</body>
</html>

<?php

    if(isset($_POST['addd'])){
    $id=$_POST['addd'];
    $sql2="UPDATE tasks SET status='0' WHERE id=$id";
    mysqli_query($conn,$sql2);}
    


    if(isset($_POST['dell'])){
    $id=$_POST['dell'];
    $sql2="DELETE FROM tasks WHERE id=$id";
    mysqli_query($conn,$sql2);}
    

    mysqli_close($conn);
?>