<?php  

if(isset($_POST["wms"])){  
 
if(!empty($_POST['name']) && !empty($_POST['credits'])) {  
    $name=$_POST['name'];  
    $comp=$_POST['credits'];  
 

  
    $conn = new mysqli("localhost","root","","waste management");
    if($conn->connect_error)
    die("not connected:".$conn->connect_error);
   
    $sql="insert into credits(name,credits) values('$name','$comp')";

    if(mysqli_query($conn, $sql)){
        echo "recorded";
    
        header("Location:creditsposted.html");
    
        }
        else{
            header("Location:loginfailure.html");
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
            <h1><strong>Credits box</strong></h1>
            <form  method="post">
                <p>name</p>
                <input type="text" name="name" placeholder="Enter the name">
                <p>Credits</p>
                <input type="text" name="credits" placeholder="Enter credits">
                <input type="submit" name="wms" value="Give credits">
         
               
                <br>
          
 
            </form>
            <div>
     </div>
     </body>
     </head>
 </html>
 
 