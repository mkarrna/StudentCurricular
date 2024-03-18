<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$data    = json_decode(file_get_contents("php://input"));
if ($data) {
    $aid   = $data->aid;
    $query = "DELETE FROM at1 WHERE aid='$aid'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>