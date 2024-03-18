<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
     $sno      = mysqli_real_escape_string($conn, $info->sno);  
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
    $name        = mysqli_real_escape_string($conn, $info->name);
    $vdate      = mysqli_real_escape_string($conn, $info->vdate);
    $vtime      = mysqli_real_escape_string($conn, $info->vtime);
     $conf      = mysqli_real_escape_string($conn, $info->conf);
    
    if ($btn_name == 'Update') {
        $sno    = $info->sno;
        $query = "UPDATE visiting_request SET sno='$sno', rollno = '$rollno', name = '$name', vdate = '$vdate', vtime = '$vtime', conf = '$conf' WHERE sno = '$sno'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
    
}
?>