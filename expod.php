<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    foreach($array as $row)
    {
        $query = "INSERT INTO de_notices(notice_no,dept,ad_date,notice,rem_date) VALUES (".$row["notice_no"].", ".$row["dept"].", '".$row["ad_date"]."', '".$row["notice"]."', '".$row["rem_date"]."')"; 
        mysqli_query($conn, $query);
    }