<?php
$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
                          
                       session_start();
  
    $_SESSION1['una']=$_POST['un'];
              
                $admin=admin;
                $librarean=librarean;
                $bca=bca;
                $ba=ba;
                $bbm=bbm;
                $bsc=bsc;
                $bcom=bcom;
                $una=$_POST['un'];
                $pas=$_POST['ps'];
                $sql="select * from login ";
                $rslt=mysqli_query($con,$sql);
                while($r=mysqli_fetch_array($rslt))
                {
                    $usei=$r['username'];
                    $pss=$r['password'];
                
                
                if($una==$usei&&$pas==$pss)
                    {
                     if($una==$admin)
                        {
                    
                                echo"<script>location='adminpage.html'</script>";
                        }
                        else if($una==$librarean)
                        {
                    
                                echo"<script>location='librarean.html'</script>";
                        }
                        else if($una==$bca)
                        {
                    
                                echo"<script>location='bcahod.html'</script>";
                        }else if($una==$bsc)
                        {
                    
                                echo"<script>location='bschod.html'</script>";
                        }
                        else if($una==$bbm)
                        {
                    
                                echo"<script>location='bbmhod.html'</script>";
                        }
                        else if($una==$ba)
                        {
                    
                                echo"<script>location='bahod.html'</script>";
                        }
                        else if($una==$bcom)
                        {
                    
                                echo"<script>location='bcomhod.html'</script>";
                        }
                        
                    }
                }
                    
                    {
                           echo"<script>alert('LOGIN IS FAILED PLEASE CHECK YOUR PASSWOED OR USERNAME'); location='login.html'</script>";
                    }
                                
mysqli_close($con);

