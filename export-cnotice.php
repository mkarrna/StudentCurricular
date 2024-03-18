<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    foreach($array as $row)
    {
        $query = "INSERT INTO clg_notice(n_type,ad_date,notice,rem_date) VALUES ( 'college','".$row["ad_date"]."', '".$row["notice"]."', '".$row["rem_date"]."')"; 
        mysqli_query($conn, $query);
    }