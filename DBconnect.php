<?php
    $conn=mysqli_connect("localhost","root","","todolist");

    if(!$conn){
        echo "cannot connect to the server";
    }

?>