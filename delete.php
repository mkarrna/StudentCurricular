<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$data    = json_decode(file_get_contents("php://input"));
if ($data) {
    $rollno    = $data->rollno;
    $query = "DELETE FROM addstud WHERE rollno='$rollno'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>