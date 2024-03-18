<?php
$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                } 
                  session_start();
     
                $rn=$_SESSION['rn'];

                   
               
                
              echo $rn;
                $sql="select * from  addstud WHERE rollno = '$rn'";
                $resl=mysqli_query($con,$sql);
                if(mysqli_num_rows($resl)==0)
                {
                           echo' <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><table class="table table-striped table-bordered" align="center">
                          <tr><th> DOES NOT EXISTED </th></tr>
                <tr><th><button class="example_e"> <a href="clienthome.html" title="TREND FRIENDS" target="_blank" class="w3-hover-opacity"><b><h2>BACK MENU</h2></b></a></button></th></table>';

                }
                else
                {
                    $i=mysqli_fetch_array($resl);
               echo'<script type="text/javascript">
                             function ins()
                                {
                                       window.location="clienthome.html"
                                 }</script>';
                    echo'<link rel="stylesheet" href="tablecss.css"><link rel="stylesheet" href="button.css">';
                    echo'<div><CENTER><h1><b>STUDENT BASIC INFORMATION</b></h1></CENTER>';
                    echo'<table border=2px class="table table-striped table-bordered">';
                    echo'<tr><th><button class="example_e">Roll number</button></th><th><input type="text" name="ut1" value='.$i['rollno'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Name</button></th><th><input type="text" name="up2" value='.$i['name'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Gender</button></th><th><input type="text" name="un3" value='.$i['gender'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Date of birth</button></th><th><input type="text" name="up4" value='.$i['dob'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Address</button></th><th><input type="text" name="up5" value='.$i['address'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Phone_number</button></th><th><input type="text" name="up6" value='.$i['pn'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Class</button></th><th><input type="text" name="up7" value='.$i['sclass'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Course</button></th><th><input type="text" name="up8" value='.$i['course'].' readonly></td></tr>';
                    echo'<tr><th><button class="example_e">Section</button></th><th><input type="text" name="up9" value='.$i['section'].' readonly></td></tr>';
                    
                    
                    echo'<tr><th  colspan="2"><button onclick ="ins()" class="example_e">back</button></th>';
                    echo'</table>';
                while($r=mysqli_fetch_array($resl))
         {
        $sc=$r['sclass'];
        $co=$r['course'];
        $sec=$r['section'];
        
                }}
                mysqli_close($con);
        ?>

