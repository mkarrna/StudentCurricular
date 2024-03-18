<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
      session_start();
                $co=$_SESSION['co'];
                $b=$co;
        
    foreach($array as $row)
    {
        $query = "INSERT INTO de_notices(dept,ad_date,notice,rem_date) VALUES ('$b', '".$row["ad_date"]."', '".$row["notice"]."', '".$row["rem_date"]."')"; 
        mysqli_query($conn, $query);
    }