<?php

$conn = mysqli_connect("localhost", "root", "", "student");
$form_data = json_decode(file_get_contents("php://input"));
session_start1();
     
                $sc=$_SESSION1['una'];
               
        $a=$sc;
        
if(isset($form_data->search_query))
{
    $search_query = $form_data->search_query;
    $query = "SELECT * FROM clg_notice WHERE  (dept LIKE '$a'  AND rollno LIKE '%$search_query%' )";
}

else 
{
   $query = "SELECT * FROM clg_notice WHERE dept LIKE '$a' "; 
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