<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$data    = json_decode(file_get_contents("php://input"));
if ($data) {
    $notice_no    = $data->notice_no;
    $query = "DELETE FROM de_notices WHERE notice_no='$notice_no'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>