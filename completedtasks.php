<?php
    include("DBconnect.php");
    $sql="select task from tasks where status=0";
    $ongoing=mysqli_query($conn,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <script src="script.js"></script>
<h1 class="naw">To Do List</h1>
<h3 class="heading">completed Tasks</h3>
<div class="container">
    <?php
        while($row=mysqli_fetch_assoc($ongoing)){
            echo "<div class='eachtask'>";
                echo "{$row['task']}";
            echo "</div>";
        }

    ?>
</div>
<button id="oldtask" onclick="window.location.href='homepage.php'">🏠︎</button>
</body>
</html>

<?php
    mysqli_close($conn);
?>