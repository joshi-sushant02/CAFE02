<?php
require('db_connection.php');
// session_start();
if(isset($_POST['username']))
{
    $name = stripslashes($_POST['username']);
    $name = mysqli_real_escape_string($connection, $name);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connection, $email);
    $address=stripslashes($_POST['addr']);
    $address=mysqli_real_escape_string($connection, $address);
    $subscription=stripslashes($_POST['subscription']);
    $subscription=mysqli_real_escape_string($connection,  $subscription);
 
    $query    = "insert into subcribe(username, addr, email,subscription)
    values('$name', '$address', '$email', '$subscription')";
    $result=mysqli_query($connection,$query);
   
   
    if($result)
    {
        echo "Congrats! You are Registered";
        header("Location:sucess.html");
       
    }
    else
    {
        echo "One of the fields are missing.Try Again";
        header("Location:failed.html");
    }
}

?>
