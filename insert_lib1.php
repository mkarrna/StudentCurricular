<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $sno      = mysqli_real_escape_string($conn, $info->sno);
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
    $bn        = mysqli_real_escape_string($conn, $info->bn);
    $bd    = mysqli_real_escape_string($conn, $info->bd);
    $rd     = mysqli_real_escape_string($conn, $info->rd);
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO library(rollno,bn,bd,rd) VALUES ('$rollno', '$bn', '$bd', '$rd')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $sno    = $info->sno;
        $query = "UPDATE library SET rollno = '$rollno',bn='$bn', bd='$bd', rd='$rd' WHERE sno='$sno' ";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>