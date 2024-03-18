<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    foreach($array as $row)
    {
        $query = "INSERT INTO library(rollno,bn,bd,rd) VALUES ( '".$row["rollno"]."', '".$row["bn"]."','".$row["bd"]."','".$row["rd"]."')"; 
        mysqli_query($conn, $query);
    }