<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    foreach($array as $row)
    {
        $query = "INSERT INTO addstud(rollno,name,gender,dob,address,pn,sclass,course,section) VALUES (".$row["rollno"].", '".$row["name"]."', '".$row["gender"]."','".$row["dob"]."','".$row["address"]."',".$row["pn"].",'".$row["sclass"]."','".$row["course"]."','".$row["section"]."')"; 
        mysqli_query($conn, $query);
    }