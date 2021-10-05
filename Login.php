<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    
    
    <?php
require('db_connection.php');

if(isset($_POST['email']))
{
    $email=stripcslashes($_POST['email']);
    $email=mysqli_real_escape_string($connection,$email);
    $password=stripcslashes($_POST['password']);
    $password=mysqli_real_escape_string($connection,$password);
    
    $query    = "SELECT * FROM users WHERE email='$email'
    AND password='" . md5($password) . "'";
    $result=mysqli_query($connection,$query);
    $rows = mysqli_num_rows($result);
    
    if($rows==1)
    {
        $query1    = "insert into login_info2(email_2,password2 )
        values('$email', '" . md5($password) . "')";
        $result1=mysqli_query($connection,$query1);
        echo "Congrats! You are Logged In";
        header("Location: login_done.html");
    }
    else
    {
        echo "Invalid Username or Password Try again";
        header("Location: login_failed.html");

        
    }
}
?>

</body>
</html>