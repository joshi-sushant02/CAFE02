<?php
   
    $connection= mysqli_connect("localhost","root","","cafe_db");

    if(mysqli_connect_error())
    {
    echo "Failed connecting to the database";
    exit();
    }
?>