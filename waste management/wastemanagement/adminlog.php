<?php  
if(isset($_POST["wms"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
    $conn = new mysqli("localhost","root","","waste management");
    if($conn->connect_error)
    die("not connected:".$conn->connect_error);
  
    $sql="select password from adminlogin where username='$user'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    if($row['password']==$pass){
        echo '<script>location.replace("afteradminlog.html")</script>';
    }
    else{
       echo '<script>location.replace("loginfailureadmin.html")</script>';
    }
}  
}
?>
<html>
   <head>
         <title>Login Form Design</title>
         <link rel="stylesheet" type="text/css" href="loginpage.css">
    <body>
    <div class="loginbox">
            <div class="signin">
        <img src="download.png"  class="user">
           <h1><strong>Admin Login</strong></h1>
           <form  method="post">
               <p>Username</p>
               <input type="text" name="username" placeholder="Enter the username">
               <p>Password</p>
               <input type="password" name="password" placeholder="Enter Password">
               <input type="submit" name="wms" value="Login">
             
              
               <br>
         

           </form>
           <div>
    </div>
    </body>
    </head>
</html>

