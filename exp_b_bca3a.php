<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
                $sec=$_SESSION['sec'];
        $a=$sc;
        $b=$co;
        $c=$sec;
    foreach($array as $row)
    {
        $query = "INSERT INTO addstud(rollno,name,gender,dob,address,pn,sclass,course,section) VALUES (".$row["rollno"].", '".$row["name"]."', '".$row["gender"]."','".$row["dob"]."','".$row["address"]."',".$row["pn"].",'$a','$b','$c')"; 
        mysqli_query($conn, $query);
    }