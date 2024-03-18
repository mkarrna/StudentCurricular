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
                    
                
                
                if($sc==$a&&$co==$b)
                    {
                   
                        echo"<script> location='add_m1.html'</script>";
                       
                        }
                } 
                {
                   echo"<script>alert('**FAILD** SELECT AUTHORISE INFOMATION'); location='marksad.html'</script>"; 
                }
                
mysqli_close($con);

