<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        
        background: url("profile_back.jfif") ;
        /* background-position: center; */
    }
.card {
  
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    box-shadow: 2px 2px 10px 2px black;
}

.title {
  color: black;
  font-style: italic;
  font-size: 18px;
  font-weight: bolder;
}


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
.submit2{
 height:1cm;
 width: 3cm;
 background: #6F4E37;
border-radius: 10px;
 margin-top: 0.2cm;

}
.submit2 button:hover{
  background: #000;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
.bill a {
  text-decoration: none;
  font-size: 22px;
  color: white;
}
button:hover, a:hover {
  opacity: 0.7;
}
.image{
  height:200px;
  width: 200px;
  border-radius: 50%;
  margin-left:1.3cm ;
  
  
}

</style>


</head>

<body>

   <h2 style="text-align:center">User Profile Card</h2>
   
   <div class="card">
    <div class="image">

      <img src="profile1.jpg" alt="John" style="width:100%" >
    </div>
    <p>
      Your Mail ID:
      
      <?php
      
        
        
        
        require('db_connection.php');
        
        $result = mysqli_query($connection,"SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");
        
        $row = mysqli_fetch_row($result);
        if($row==null){
          echo"you are not logged in";
        }
        else{

        
        
      
          echo $row[0];}

       
    
?>
</p>

    

<p class="title">
  <h2>

    <?php

    
      


      require('db_connection.php');
      
      $result = mysqli_query($connection,"SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");
      
      $row = mysqli_fetch_row($result);
      if($row==null){
        echo"you are not logged in";
      }
      else{

      
      
    
        $value=$row[0];
        
        
        $result2 = mysqli_query($connection,"SELECT username FROM users where email='$value'");
        $mail = mysqli_fetch_row($result2);
        
        echo $mail[0];
        
      }
    
?>
  </h2>
<p class="title">
  Your Mobile No. :
  <?php
  
    

    require('db_connection.php');
    
    $result = mysqli_query($connection,"SELECT email_2 FROM login_info2 order by id DESC LIMIT 1");
    
    $row = mysqli_fetch_row($result);
    if($row==null){
      echo"you are not logged in";
    }
    else{

    
    
  
      $value=$row[0];
      $result3 = mysqli_query($connection,"SELECT mobile_number FROM users where email='$value'");
      $number = mysqli_fetch_row($result3);
      
      echo $number[0];
    }
  
    


?>
</p>
<p class="title">WELCOME to Café Reminiscence</p><br>
  <p>PUNE</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <button class="submit2"><a href="index.html">Done</a></button>
  <p><button class="bill">   <a href="bill.php"> Get bill</a></button></p>
</div>

</body>
</html>
