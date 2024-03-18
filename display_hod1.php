

<?php

$conn = mysqli_connect("localhost", "root", "", "student");
session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
                $sec=$_SESSION['sec'];
        $a=$sc;
        $b=$co;
        $c=$sec;
$form_data = json_decode(file_get_contents("php://input"));

if(isset($form_data->search_query))
{
    $search_query = $form_data->search_query;
    $query = "SELECT * FROM de_notices WHERE ((dept like '$b') and notice_no LIKE '%$search_query%' )";
}

else if(isset($form_data->search_query3))
{
    $search_query3 = $form_data->search_query3;
    $query = "SELECT * FROM de_notices WHERE ((dept like '$b') and ad_date LIKE '%$search_query3%' )";
}
else if(isset($form_data->search_query4))
{
    $search_query4 = $form_data->search_query4;
    $query = "SELECT * FROM de_notices WHERE ((dept like '$b') and rem_date LIKE '%$search_query4%' )";
}
else
{
    $query = "SELECT * FROM de_notices WHERE dept like '$b' ";
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
