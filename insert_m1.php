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
   $exam_type     = mysqli_real_escape_string($conn, $info->exam_type);
    $s1     = mysqli_real_escape_string($conn, $info->s1);
    $sc1     = mysqli_real_escape_string($conn, $info->sc1);
     $s2     = mysqli_real_escape_string($conn, $info->s2);
    $sc2     = mysqli_real_escape_string($conn, $info->sc2);
     $s3     = mysqli_real_escape_string($conn, $info->s3);
    $sc3     = mysqli_real_escape_string($conn, $info->sc3);
     $s4     = mysqli_real_escape_string($conn, $info->s4);
    $sc4     = mysqli_real_escape_string($conn, $info->sc4);
     $s5     = mysqli_real_escape_string($conn, $info->s5);
    $sc5     = mysqli_real_escape_string($conn, $info->sc5);
     $s6     = mysqli_real_escape_string($conn, $info->s6);
    $sc6     = mysqli_real_escape_string($conn, $info->sc6);
     $s7     = mysqli_real_escape_string($conn, $info->s7);
    $sc7     = mysqli_real_escape_string($conn, $info->sc7);
     $s8     = mysqli_real_escape_string($conn, $info->s8);
    $sc8     = mysqli_real_escape_string($conn, $info->sc8);
     $s9     = mysqli_real_escape_string($conn, $info->s9);
    $sc9     = mysqli_real_escape_string($conn, $info->sc9);
     $s10     = mysqli_real_escape_string($conn, $info->s10);
    $sc10     = mysqli_real_escape_string($conn, $info->sc10);
    
     $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
         $query2="SELECT * FROM marks WHERE rollno='$rollno' AND sc='$a' AND exam_type='$exam_type'";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2)>0){
        echo 'Already Exists';
    }else{
       $query = "INSERT INTO marks(rollno,sc,co,sec,exam_type,s1,sc1,s2,sc2,s3,sc3,s4,sc4,s5,sc5,s6,sc6,s7,sc7,s8,sc8,s9,sc9,s10,sc10) VALUES ('$rollno','$a','$b','$c','$exam_type','$s1','$sc1','$s2','$sc2','$s3','$sc3','$s4','$sc4','$s5','$sc5','$s6','$sc6','$s7','$sc7','$s8','$sc8','$s9','$sc9','$s10','$sc10')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }}
    if ($btn_name == 'Update') {
        $mid    = $info->mid;
        $query = "UPDATE marks SET mid='$mid',rollno='$rollno',sc='$sc', co='$co' ,sec='$sec',exam_type='$exam_type', s1='$s1', sc1='$sc1', s2='$s2', sc2='$sc2', s3='$s3', sc3='$sc3', s4='$s4', sc4='$sc4', s5='$s5', sc5='$sc5', s6='$s6', sc6='$sc6', s7='$s7', sc7='$sc7', s8='$s8', sc8='$sc8', s9='$s9', sc9='$sc9', s10='$s10', sc10='$sc10' WHERE mid = '$mid'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>

    