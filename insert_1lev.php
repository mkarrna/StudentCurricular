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
    $sno      = mysqli_real_escape_string($conn, $info->sno);
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
   
    $ld     = mysqli_real_escape_string($conn, $info->ld);
    $rs      = mysqli_real_escape_string($conn, $info->rs);
   
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO lev(rollno,sc,co,sec,ld,rs) VALUES ('$rollno','$a', '$b','$c', '$ld', '$rs')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $sno    = $info->sno;
        $query = "UPDATE lev SET rollno = '$rollno',sc='$a',co='$b',sec='$c', ld='$ld', rs='$rs' WHERE sno='$sno' ";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>