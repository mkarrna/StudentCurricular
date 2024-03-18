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
    $name        = mysqli_real_escape_string($conn, $info->name);
    $gender      = mysqli_real_escape_string($conn, $info->gender);
    $dob      = mysqli_real_escape_string($conn, $info->dob);
    $address      = mysqli_real_escape_string($conn, $info->address);
    $pn      = mysqli_real_escape_string($conn, $info->pn);
    
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query2="SELECT * FROM addstud WHERE rollno='$rollno'";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2)>0){
        echo 'Already Exists';
    }else{
        $query = "INSERT INTO addstud(rollno,name,gender,dob,address,pn,sclass,course,section) VALUES ('$rollno','$name', '$gender', '$dob', '$address', '$pn', '$a', '$b', '$c')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...kkk";
        } else {
            echo 'Failed';
        }
    }}
    if ($btn_name == 'Update') {
        $rollno    = $info->rollno;
        $query = "UPDATE addstud SET name = '$name', gender = '$gender', dob = '$dob', address = '$address', pn = '$pn', sclass = '$a', course = '$b', section = '$c' WHERE rollno = '$rollno'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>