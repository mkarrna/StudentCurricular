<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$data    = json_decode(file_get_contents("php://input"));
if ($data) {
    $sid   = $data->sid;
    $query = "DELETE FROM subject WHERE sid='$sid'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>