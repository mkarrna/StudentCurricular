<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    foreach($array as $row)
    {
        $query = "INSERT INTO rollnumber (rollno,sc,co,sec) VALUES (".$row["rollno"].",'".$row["sc"]."','".$row["co"]."','".$row["sec"]."')"; 
        mysqli_query($conn, $query);
    }