<?php

$conn = mysqli_connect("localhost", "root", "", "student");
session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
        $a=$sc;
        $b=$co;
       
$query="SELECT * FROM subject where sc='VI' AND co='$b'" ;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    $output[]=$row;
}
echo json_encode($output);

