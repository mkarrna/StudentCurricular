<?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $array = json_decode(file_get_contents("php://input"), true);
    
       
    foreach($array as $row)
    {
        $rn=$row['rollno'];
        session_start();
     
                $sc=$_SESSION['sc'];
                $co=$_SESSION['co'];
                $sec=$_SESSION['sec'];
        $a=$sc;
        $b=$co;
        $c=$sec;
       $query2="SELECT * FROM subject WHERE sc='I' and co='$b'";
                $result2=mysqli_query($conn,$query2);
                while($r=mysqli_fetch_array($result2))
                  {
                     $a1=$r['s1'];
                     $a2=$r['s2'];
                     $a3=$r['s3'];
                     $a4=$r['s4'];
                     $a5=$r['s5'];
                     $a6=$r['s6'];
                     $a7=$r['s7'];
                     $a8=$r['s8'];
                     $a9=$r['s9'];
                     $a10=$r['s10'];
               }
        
            $query = "INSERT INTO marks(rollno,sc,co,sec,exam_type,s1,sc1,s2,sc2,s3,sc3,s4,sc4,s5,sc5,s6,sc6,s7,sc7,s8,sc8,s9,sc9,s10,sc10) VALUES (".$row["rollno"].",'I','$b','$c', '".$row["exam_type"]."', '$a1','".$row["sc1"]."',  '$a2','".$row["sc2"]."',  '$a3','".$row["sc3"]."', '$a4','".$row["sc4"]."', '$a5','".$row["sc5"]."',  '$a6','".$row["sc6"]."',  '$a7','".$row["sc7"]."',  '$a8','".$row["sc8"]."',  '$a9','".$row["sc9"]."',  '$a10','".$row["sc10"]."')"; 
        mysqli_query($conn, $query);
        }
       