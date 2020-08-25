<?php  

$conn = new mysqli("localhost","root","","waste management");
   
    $sql="select name,credits from credits";
    
    $result=$conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
            echo "name: " . $row["name"]. " - credits: " . $row["credits"]. "<br>";
        }

$conn->close();


?>
