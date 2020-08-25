<?php  
if(isset($_POST["wms"])){  
  
if(!empty($_POST['name'])) {  
    $name=$_POST['name'];  

  
    $conn = new mysqli("localhost","root","","waste management");
    if($conn->connect_error)
    die("not connected:".$conn->connect_error);
  
    $sql="DELETE from customer where name='$name'";
    $result=$conn->query($sql);
    header("Location:deletesucess.html");

   $retval = mysqli_query( $sql, $conn );
   if( ! $retval ) {
    echo '<script>location.replace("afteruserlogin.html")</script>';
 }



   mysql_close($conn);
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
           <h1><strong>Delete Customer</strong></h1>
           <form  method="post">
               <p>name</p>
               <input type="text" name="name" placeholder="Enter the name of customer">
              
               <input type="submit" name="wms" value="Delete ">
      
         

           </form>
           <div>
    </div>
    </body>
    </head>
</html>
