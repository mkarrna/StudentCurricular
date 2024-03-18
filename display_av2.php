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
    $query = "SELECT * FROM visiting_request WHERE (sc LIKE 'III' AND sc LIKE 'IV' AND  co LIKE '$b' AND sec LIKE '$c' AND rollno LIKE '%$search_query%' )";
}
else if(isset($form_data->search_query2))
{
    $search_query2 = $form_data->search_query2;
    $query = "SELECT * FROM visiting_request WHERE ((sc LIKE 'III'  OR sc LIKE 'IV') AND co LIKE '$b' AND sec LIKE '$c' AND name LIKE '%$search_query2%' )";
}
else if(isset($form_data->search_query3))
{
    $search_query3 = $form_data->search_query3;
    $query = "SELECT * FROM visiting_request WHERE ((sc LIKE 'III' OR  sc LIKE 'IV') AND co LIKE '$b' AND sec LIKE '$c' AND vdate LIKE '%$search_query3%' )";
}
else if(isset($form_data->search_query4))
{
    $search_query4 = $form_data->search_query4;
    $query = "SELECT * FROM visiting_request WHERE ((sc LIKE 'III' OR sc LIKE 'IV') AND co LIKE '$b' AND sec LIKE '$c' AND vtime LIKE '%$search_query4%' )";
}
else
{
    $query = "SELECT * FROM visiting_request where  ( sc LIKE 'III' OR sc LIKE 'IV' ) AND co LIKE '$b' AND sec LIKE '$c'";
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
