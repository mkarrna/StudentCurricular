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
       $query2="SELECT * FROM subject WHERE sc='IV' and co='$b'";
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
        
            $query = "INSERT INTO at1(rollno,sc,co,sec,month,s1,ac1,s2,ac2,s3,ac3,s4,ac4,s5,ac5,s6,ac6,s7,ac7,s8,ac8,s9,ac9,s10,ac10) VALUES (".$row["rollno"].",'IV','$b','$c', '".$row["month"]."', '$a1','".$row["ac1"]."', '$a2','".$row["ac2"]."', '$a3','".$row["ac3"]."', '$a4','".$row["ac4"]."', '$a5','".$row["ac5"]."', '$a6','".$row["ac6"]."', '$a7','".$row["ac7"]."', '$a8','".$row["ac8"]."', '$a9','".$row["ac9"]."', '$a10','".$row["ac10"]."')"; 
        mysqli_query($conn, $query);
    }