<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    foreach($array as $row)
    {
        $query = "INSERT INTO lev(rollno,sc,co,sec,ld,rs) VALUES ('".$row["rollno"]."', '".$row["sc"]."', '".$row["co"]."', '".$row["sec"]."','".$row["ld"]."','".$row["rs"]."')"; 
        mysqli_query($conn, $query);
    }