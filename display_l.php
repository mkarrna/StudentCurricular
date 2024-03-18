<?php

$conn = mysqli_connect("localhost", "root", "", "student");
$form_data = json_decode(file_get_contents("php://input"));

if(isset($form_data->search_query))
{
    $search_query = $form_data->search_query;
    $query = "SELECT * FROM lev WHERE (rollno LIKE '%$search_query%')";
}
else if(isset($form_data->search_query2))
{
    $search_query2 = $form_data->search_query2;
    $query = "SELECT * FROM lev WHERE (co LIKE '%$search_query2%' )";
}

else
{
    $query = "SELECT * FROM lev ORDER BY sno";
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