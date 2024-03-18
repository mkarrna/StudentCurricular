<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
                $sec=$_SESSION['sec'];
                $a=$sc;
                $b=$co;
                $c=$sec;
if ($info) {
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
   $month     = mysqli_real_escape_string($conn, $info->month);
    $sc     = mysqli_real_escape_string($conn, $info->sc);
    $co     = mysqli_real_escape_string($conn, $info->co);
    $sec     = mysqli_real_escape_string($conn, $info->sec);
    $s1     = mysqli_real_escape_string($conn, $info->s1);
    $ac1     = mysqli_real_escape_string($conn, $info->ac1);
     $s2     = mysqli_real_escape_string($conn, $info->s2);
    $ac2     = mysqli_real_escape_string($conn, $info->ac2);
     $s3     = mysqli_real_escape_string($conn, $info->s3);
    $ac3     = mysqli_real_escape_string($conn, $info->ac3);
     $s4     = mysqli_real_escape_string($conn, $info->s4);
    $ac4     = mysqli_real_escape_string($conn, $info->ac4);
     $s5     = mysqli_real_escape_string($conn, $info->s5);
    $ac5     = mysqli_real_escape_string($conn, $info->ac5);
     $s6     = mysqli_real_escape_string($conn, $info->s6);
    $ac6     = mysqli_real_escape_string($conn, $info->ac6);
     $s7     = mysqli_real_escape_string($conn, $info->s7);
    $ac7     = mysqli_real_escape_string($conn, $info->ac7);
     $s8     = mysqli_real_escape_string($conn, $info->s8);
    $ac8     = mysqli_real_escape_string($conn, $info->ac8);
     $s9     = mysqli_real_escape_string($conn, $info->s9);
    $ac9     = mysqli_real_escape_string($conn, $info->ac9);
     $s10     = mysqli_real_escape_string($conn, $info->s10);
    $ac10     = mysqli_real_escape_string($conn, $info->ac10);
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query2="SELECT * FROM at1 WHERE rollno='$rollno' AND sc='$a' AND month='$month'";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2)>0){
        echo 'Already Exists';
    }else{
        $query = "INSERT INTO at1(rollno,sc,co,sec,month,s1,ac1,s2,ac2,s3,ac3,s4,ac4,s5,ac5,s6,ac6,s7,ac7,s8,ac8,s9,ac9,s10,ac10) VALUES ('$rollno','$a','$b','$c','$month','$s1', '$ac1','$s2', '$ac2','$s3', '$ac3','$s4', '$ac4','$s5', '$ac5','$s6', '$ac6','$s7', '$ac7','$s8', '$ac8','$s9', '$ac9','$s10', '$ac10')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }}
    if ($btn_name == 'Update') {
        $aid    = $info->aid;
        $query = "UPDATE at1 SET aid='$aid',rollno='$rollno',sc='$sc', co='$co' ,sec='$sec',month='$month', s1='$s1', ac1='$ac1', s2='$s2', ac2='$ac2', s3='$s3', ac3='$ac3', s4='$s4', ac4='$ac4', s5='$s5', ac5='$ac5', s6='$s6', ac6='$ac6', s7='$s7', ac7='$ac7', s8='$s8', ac8='$ac8', s9='$s9', ac9='$ac9', s10='$s10', ac10='$ac10' WHERE aid = '$aid'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>