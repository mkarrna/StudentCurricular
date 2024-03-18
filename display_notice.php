
<?php

$conn = mysqli_connect("localhost", "root", "", "student");
$form_data = json_decode(file_get_contents("php://input"));

$currentdate = date('Y-m-d');
$clg='college';
$un='university';
    $query = "SELECT * FROM clg_notice WHERE rem_date >='$currentdate' AND (n_type ='college' or n_type ='university'  )";


$output = array();
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}

