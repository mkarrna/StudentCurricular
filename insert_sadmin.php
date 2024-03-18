<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $sno      = mysqli_real_escape_string($conn, $info->sno);
    $username     = mysqli_real_escape_string($conn, $info->username);
    $password     = mysqli_real_escape_string($conn, $info->password);
    $sclass      = mysqli_real_escape_string($conn, $info->sclass);
    $course      = mysqli_real_escape_string($conn, $info->course);
    $section     = mysqli_real_escape_string($conn, $info->section);
    
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
         $query2="SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2)>0){
        echo 'Already Exists';
    }else{
        
        $query = "INSERT INTO adminlogin(username,password,sclass,course,section) VALUES ('$username','$password','$sclass', '$course', '$section')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...kkk";
        } else {
            echo 'Failed';
        }
    }}
    if ($btn_name == 'Update') {
        $rollno    = $info->sno;
        $query = "UPDATE adminlogin SET sno = '$sno',username='$username' , password = '$password',sclass = '$sclass', course = '$course', section = '$section'  WHERE sno = '$sno'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>