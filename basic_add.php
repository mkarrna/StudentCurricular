<?php
$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
                 session_start();
  
    $_SESSION['sc']=$_POST['sc'];
                $_SESSION['co']=$_POST['co'];
                $_SESSION['sec']=$_POST['sec'];
                $admin=admin;
                $bca1a=bca1a;
                $bca1b=bca1b;
                $bca1c=bca1c;
                $bcom=bcom;
                $sc=$_POST['sc'];
                $co=$_POST['co'];
                $sec=$_POST['sec'];
               
                $pas=$_POST['ps'];
                $sql="select * from college ";
                $rslt=mysqli_query($con,$sql);
                while($r=mysqli_fetch_array($rslt))
                {    $a=$r['sc'];
                     $b=$r['co'];
                    $c=$r['sec'];
                    $pss=$r['password'];
                
                
                if($sc==$a&&$co==$b)
                    {
                   
                        echo"<script> location='addstud.html'</script>";
                       
                        }
                } 
                {
                   echo"<script>alert('**FAILD** SELECT AUTHORISE INFOMATION'); location='basic_add.html'</script>"; 
                }
                
mysqli_close($con);

