<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $nno      = mysqli_real_escape_string($conn, $info->nno);
    $ad        = mysqli_real_escape_string($conn, $info->ad);
    $ed     = mysqli_real_escape_string($conn, $info->ed);
    $notice    = mysqli_real_escape_string($conn, $info->notice);
  
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO notice_c(nno,ad,ed,notice ) VALUES ('$nno','$ad', '$ed', '$notice')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $rollno    = $info->rollno;
        $query = "UPDATE notice_c SET ad='$ad', ed='$ed', notice='$notice' WHERE nno = '$nno'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>