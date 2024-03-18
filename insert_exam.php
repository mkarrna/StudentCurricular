<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $eid      = mysqli_real_escape_string($conn, $info->eid);
    $exam_type      = mysqli_real_escape_string($conn, $info->exam_type);
    
    
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO exam(exam_type) VALUES ('$exam_type')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $eid    = $info->eid;
        $query = "UPDATE exam SET exam_type = '$exam_type'WHERE eid='$eid' ";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>