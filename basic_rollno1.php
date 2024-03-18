<?php

$conn = mysqli_connect("localhost", "root", "", "student");
session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
                $sec=$_SESSION['sec'];
        $a=$sc;
        $b=$co;
        $c=$sec;
$query = "SELECT * FROM rollnumber WHERE sc= '$a' and co = '$b' and sec = '$c'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    $output[]=$row;
}
echo json_encode($output);


