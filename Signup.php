<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
    </style>
</head>
<body>
    
    
    
    
<?php
require('db_connection.php');
// session_start();
if(isset($_POST['username']))
{
    $name = stripslashes($_POST['username']);
    $name = mysqli_real_escape_string($connection, $name);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connection, $email);
    $password=stripslashes($_POST['password']);
    $password=mysqli_real_escape_string($connection, $password);
    $mobile_num=stripslashes($_POST['mobile_number']);
    $mobile_num=mysqli_real_escape_string($connection,  $mobile_num);
 
    $query    = "insert into users(username, password, email,mobile_number )
    values('$name', '" . md5($password) . "', '$email', '$mobile_num')";
    $result=mysqli_query($connection,$query);
    $query1    = "insert into login_info2(email_2,password2 )
    values('$email', '" . md5($password) . "')";
    $result1=mysqli_query($connection,$query1);
   
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
<br>
<br>
<button class="submit2"><a href="index.html">GO BACK!!</a></button>
</body>
</html>