<?php  

if(isset($_POST["wms"])){  
 
if(!empty($_POST['name']) && !empty($_POST['complaint'])) {  
    $name=$_POST['name'];  
    $comp=$_POST['complaint'];  
 

  
    $conn = new mysqli("localhost","root","","waste management");
    if($conn->connect_error)
    die("not connected:".$conn->connect_error);
   
    $sql="insert into complaint(name,complaint) values('$name','$comp')";

    if(mysqli_query($conn, $sql)){
        echo "recorded";
    
        header("Location:complaintposted.html");
    
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
           <h1><strong>Complaint box</strong></h1>
           <form  method="post">
               <p>name</p>
               <input type="text" name="name" placeholder="Enter the name">
               <p>Complaint</p>
               <input type="text" name="complaint" placeholder="Enter complaint">
               <input type="submit" name="wms" value="Submit complaint">
        
              
               <br>
         

           </form>
           <div>
    </div>
    </body>
    </head>
</html>

