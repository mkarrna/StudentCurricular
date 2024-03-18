<?php

$conn = mysqli_connect("localhost", "root", "", "student");
 
$query="SELECT * FROM month where sem='II'" ;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    $output[]=$row;
}
echo json_encode($output);

