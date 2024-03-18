<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
     $co       = mysqli_real_escape_string($conn, $info->co);
      $sec       = mysqli_real_escape_string($conn, $info->sec);
    $s1        = mysqli_real_escape_string($conn, $info->s1);
    $m1     = mysqli_real_escape_string($conn, $info->m1);
    $s2        = mysqli_real_escape_string($conn, $info->s2);
    $m2     = mysqli_real_escape_string($conn, $info->m2);
    $s3        = mysqli_real_escape_string($conn, $info->s3);
    $m3     = mysqli_real_escape_string($conn, $info->m3);
    $s4        = mysqli_real_escape_string($conn, $info->s4);
    $m4     = mysqli_real_escape_string($conn, $info->m4);
    $s5        = mysqli_real_escape_string($conn, $info->s5);
    $m5     = mysqli_real_escape_string($conn, $info->m5);
    $s6        = mysqli_real_escape_string($conn, $info->s6);
    $m6     = mysqli_real_escape_string($conn, $info->m6);
    $s7        = mysqli_real_escape_string($conn, $info->s7);
    $m7    = mysqli_real_escape_string($conn, $info->m7);
    $s8        = mysqli_real_escape_string($conn, $info->s8);
    $m8     = mysqli_real_escape_string($conn, $info->m8);
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO m5(rollno,co,sec,s1,m1,s2,m2,s3,m3,s4,m4,s5,m5,s6,m6,s7,m7,s8,m8) VALUES ('$rollno','$co','$sec','$s1', '$m1','$s2', '$m2','$s3', '$m3','$s4', '$m4','$s5', '$m5','$s6', '$m6','$s7', '$m7','$s8', '$m8')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $rollno    = $info->rollno;
        $query = "UPDATE m5 SET rollno='$rollno',co='$co',sec='$sec', s1='$s1', m1='$m1', s2='$s2', m2='$m2', s3='$s3', m3='$m3', s4='$s4', m4='$m4', s5='$s5', m5='$m5', s6='$s6', m6='$m6', s7='$s7', m7='$m7', s8='$s8', m8='$m8' WHERE rollno = '$rollno'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>