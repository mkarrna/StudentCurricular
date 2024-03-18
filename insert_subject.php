<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $sid      = mysqli_real_escape_string($conn, $info->sid);
    
    $sc     = mysqli_real_escape_string($conn, $info->sc);
    $co      = mysqli_real_escape_string($conn, $info->co);
    $s1    = mysqli_real_escape_string($conn, $info->s1);
    $s2    = mysqli_real_escape_string($conn, $info->s2);
    $s3    = mysqli_real_escape_string($conn, $info->s3);
    $s4    = mysqli_real_escape_string($conn, $info->s4);
    $s5    = mysqli_real_escape_string($conn, $info->s5);
    $s6    = mysqli_real_escape_string($conn, $info->s6);
    $s7    = mysqli_real_escape_string($conn, $info->s7);
    $s8    = mysqli_real_escape_string($conn, $info->s8);
    $s9    = mysqli_real_escape_string($conn, $info->s9);
    $s10    = mysqli_real_escape_string($conn, $info->s10);
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
         $query2="SELECT * FROM subject WHERE sc='$sc' AND co='$co' ";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2)>0){
        echo 'Already Exists';
    }else{
        $query = "INSERT INTO subject (sc,co,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10) VALUES ( '$sc', '$co', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9', '$s10')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...kkk";
        } else {
            echo 'Failed';
        }
    }}
    if ($btn_name == 'Update') {
        $sid    = $info->sid;
        $query = "UPDATE subject SET sc = '$sc', co = '$co', s1 = '$s1', s2 = '$s2', s3 = '$s3', s4 = '$s4', s5 = '$s5', s6 = '$s6', s7 = '$s7', s8 = '$s8', s9 = '$s9', s10 = '$s10' WHERE sid = '$sid'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>