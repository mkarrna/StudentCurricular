<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$data    = json_decode(file_get_contents("php://input"));
if ($data) {
    $sno    = $data->sno;
    $query = "DELETE FROM adminlogin WHERE sno='$sno'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>