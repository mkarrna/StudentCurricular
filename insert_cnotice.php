<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $notice_no      = mysqli_real_escape_string($conn, $info->notice_no);
      $n_type      = mysqli_real_escape_string($conn, $info->n_type);
    $ad_date       = mysqli_real_escape_string($conn, $info->ad_date);
    $notice      = mysqli_real_escape_string($conn, $info->notice);
    $rem_date    = mysqli_real_escape_string($conn, $info->rem_date);
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO clg_notice(n_type,ad_date,notice,rem_date) VALUES ('college','$ad_date', '$notice', '$rem_date')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $notice_no    = $info->notice_no;
        $query = "UPDATE clg_notice SET ad_date = '$ad_date', n_type = '$n_type', notice = '$notice', rem_date = '$rem_date' WHERE notice_no = '$notice_no'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>