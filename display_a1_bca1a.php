<?php

$conn = mysqli_connect("localhost", "root", "", "student");
$form_data = json_decode(file_get_contents("php://input"));
session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
                $sec=$_SESSION['sec'];
        $a=$sc;
        $b=$co;
        $c=$sec;
if(isset($form_data->search_query))
{
    $search_query = $form_data->search_query;
    $query = "SELECT * FROM at1 WHERE  ( sc LIKE '$a' and co LIKE '$b' and  sec LIKE '$c' AND rollno LIKE '%$search_query%' )";
}

else 
{
   $query = "SELECT * FROM at1 WHERE  sc LIKE '$a' and co LIKE '$b' and sec LIKE '$c' ORDER BY rollno "; 
}


$output = array();
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?>