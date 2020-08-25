<?php  

if(isset($_POST["submit"])){  
 
if(!empty($_POST['area']) && !empty($_POST['name'])&& !empty($_POST['password'])&& !empty($_POST['phone'])&& !empty($_POST['username'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
    $area=$_POST['area'];  
    $name=$_POST['name']; 
    $phone=$_POST['phone'];  

  
    $conn = new mysqli("localhost","root","","waste management");
    if($conn->connect_error)
    die("not connected:".$conn->connect_error);
   
    $sql="insert into customer(area,name,password,phone,username) values('$area','$name','$pass','$phone','$user')";

    if(mysqli_query($conn, $sql)){
        echo "recorded";
    
        header("Location:register.html");
    
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
            <link rel="stylesheet" type="text/css" href="signup.css">
            <body class="body">
                    <div class="wc">
                            <br><br><br>
                            <h1 style="color:white"> _/\_ WELCOME TO SWACH CITY _/\_ </h1>
                            <br>
                            
                            <img  src="photo_2019-10-04_22-54-01.jpg" >
                    </div>
					 <div class="loginbox">
                    <div class="signin">
					<form method="post">
                            <br><br>
                            <h1 style="color:white">FILL THE DETAILS TO SIGNUP</h1>
                            <p style="color:white">NAME</p>
                            <input type="text" name="name" placeholder="Enter the name">
                            <p style="color:white">PHONE NUMBER</p>
                            <input type="number" name="phone" placeholder="Enter the phone number">
                            <p style="color:white">USERNAME</p>
                            <input type="text" name="username" placeholder="Enter the username"> 
                            <p style="color:white">PASSWORD</p>
                            <input type="text" name="password" placeholder="Enter the password">
                            <p style="color:white">AREA</p>
                            <select className ='input1' name="area" placeholder="select the area">
                                <option></option>
                                    <option>west godavari</option>
                                    <option>east godavari</option>
                                    <option>krishna</option>
                                    <option>vishakapattanam</option>
                                    </select>
                           
                            <br><br>
                            <input type="submit" name="submit" value="SIGN UP!!">
                                <br><br> <br><br> <br><br> <br><br> <br><br>
								</form>
                        </div>
                    </div>
    

            </body>
    </head>
   

</html>