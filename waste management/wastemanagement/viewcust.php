<?php  

$conn = new mysqli("localhost","root","","waste management");
   
    $sql="select name,phone,area from customer";
    
    $result=$conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
            echo "name: " . $row["name"]. " - phone: " . $row["phone"]. "- area " . $row["area"]. "<br>";
        }

$conn->close();


?>
