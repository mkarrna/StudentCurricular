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
       {
        $query = "INSERT INTO lev(rollno,sc,co,sec,ld,rs) VALUES ('".$row["rollno"]."', '$a', '$b', '$c','".$row["ld"]."','".$row["rs"]."')"; 
        mysqli_query($conn, $query);
    }}