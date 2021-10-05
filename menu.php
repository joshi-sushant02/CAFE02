<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
$Name=stripcslashes($_POST['Name']);
$Name=mysqli_real_escape_string($connection, $Name);

$People=stripcslashes($_POST['People']);
$People=mysqli_real_escape_string($connection, $People);

$date_time = date($_POST['d-m-Y']);
$orderr=stripcslashes($_POST['order']);
$orderr=mysqli_real_escape_string($connection, $orderr);

require('db_connection.php');
        
        $result = mysqli_query($connection,"SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");
        
        $row = mysqli_fetch_row($result);
        $value=$row[0];
        
        
        $result2 = mysqli_query($connection,"SELECT username FROM users where email='$value'");
        $mail = mysqli_fetch_row($result2);
        
        
        if($mail[0]==$Name){
            $query= "insert into order1(username, peoples,date, orderr)
            values('$Name','$People', '$date_time', '$orderr')";
            // header("Location: menu.html");
            $Result=mysqli_query($connection,$query);
            
            if($Result)
            {
                
                echo "Your order has been placed";
                header("Location:sucess.html");
                
                
            }
            else
            {
                header("Location:failed.html");
                
            }
            
        }
        else{
            
            echo "invalid username!!";
            header("Location:failed.html");
        
        
      
        
        
        }

   
    
    
    
    
    
    
    
    ?>
    

    </body>
    </html>