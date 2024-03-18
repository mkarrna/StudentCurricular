<?php

$conn = mysqli_connect("localhost", "root", "", "student");
session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
        $a=$sc;
        $b=$co;
if($a=='I' || $a=='III' || $a=='V')
{
    $query = "SELECT * FROM month WHERE sem='I'";
}

else
{
    $query = "SELECT * FROM month where sem='II'";
}


$output = array();
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}




