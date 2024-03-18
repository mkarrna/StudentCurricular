<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$info = json_decode(file_get_contents("php://input"));
if ($info) {
    $sno      = mysqli_real_escape_string($conn, $info->sno);
    $rollno      = mysqli_real_escape_string($conn, $info->rollno);
    $sc      = mysqli_real_escape_string($conn, $info->sc);
    $co      = mysqli_real_escape_string($conn, $info->co);
    $sec      = mysqli_real_escape_string($conn, $info->sec);
    $ld    = mysqli_real_escape_string($conn, $info->ld);
    $rs     = mysqli_real_escape_string($conn, $info->rs);
     
    $query2="SELECT * FROM rollnumber WHERE rollno='$rollno'";
                $result2=mysqli_query($conn,$query2);
                while($r=mysqli_fetch_array($result2))
                  {
                     $sc1=$r['sc'];
                     $co1=$r['co'];
                     $sec1=$r['sec'];
    
                 }
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO lev(rollno,sc,co,sec,ld,rs) VALUES ('$rollno','$sc1', '$co1','$sec1', '$ld', '$rs')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $sno    = $info->sno;
        $query = "UPDATE lev SET rollno = '$rollno',sc='$sc',co='$co',sec='$sec', ld='$ld', rs='$rs' WHERE sno='$sno' ";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>