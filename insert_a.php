<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
    $reason        = mysqli_real_escape_string($conn, $info->reason);
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO marks_c(rollno,sem,sub,totm,scom) VALUES ('$rollno','$sem','$sub','$totm','$scom')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $rollno    = $info->rollno;
        $query = "UPDATE marks_c SET sem = '$sem', sub='$sub', totm='$totm', scom='$scom' where rollno = '$rollno' & sem='&sem'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>