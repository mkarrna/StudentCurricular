<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
    
    $sc     = mysqli_real_escape_string($conn, $info->sc);
    $co      = mysqli_real_escape_string($conn, $info->co);
    $sec    = mysqli_real_escape_string($conn, $info->sec);
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
         $query2="SELECT * FROM rollnumber WHERE rollno='$rollno'";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2)>0){
        echo 'Already Exists';
    }else{
        $query = "INSERT INTO rollnumber (rollno,sc,co,sec) VALUES ('$rollno', '$sc', '$co', '$sec')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...kkk";
        } else {
            echo 'Failed';
        }
    }}
    if ($btn_name == 'Update') {
        $rollno    = $info->rollno;
        $query = "UPDATE rollnumber SET rollno = '$rollno', sc = '$sc', co = '$co', sec = '$sec' WHERE rollno = '$rollno'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>