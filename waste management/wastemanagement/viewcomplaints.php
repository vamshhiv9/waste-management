<?php  

$conn = new mysqli("localhost","root","","waste management");
   
    $sql="select name,complaint from complaint";
    
    $result=$conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
            echo "name: " . $row["name"]. " - complaint: " . $row["complaint"].  "<br>";
        }

$conn->close();


?>
