<?php

$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
                session_start();
     
                $rn=$_SESSION['rn'];
                
               
                $sql="select * from  at1 WHERE rollno = '$rn' and sc='VI'";
                $resl=mysqli_query($con,$sql);
                if(mysqli_num_rows($resl)==0)
                {
                           echo' <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><table class="table table-striped table-bordered" align="center">
                          <tr><th> DOES NOT EXISTED </th></tr>
                <tr><th><button class="example_e"> <a href="clienthome.html" title="TREND FRIENDS" target="_blank" class="w3-hover-opacity"><b><h2>BACK MENU</h2></b></a></button></th></table>';

                }
                else
                {
                   
                    echo'<script type="text/javascript">
                             function ins()
                                {
                                       window.location="clienthome.html"
                                 }</script>';
                    echo'<style> input{}</style>';
                    
                   
                    echo'<link rel="stylesheet" href="tablecss.css"><link rel="stylesheet" href="button.css">';
                    echo'<div><CENTER><h1><b>STUDENT ATTENDENCEY INFORMATION</b></h1></CENTER>';
                    echo'<table border=2px align="center">';
                    echo'<tr><th><button class="example_e">Roll number</button></th><th><button class="example_e">month</button></th><th><button class="example_e">Subject</button></th><th><button class="example_e">Atennded class(%)</button></th><th><button class="example_e">Subject</button></th><th><button class="example_e">Atennded class(%)</th><th><button class="example_e">Subject</button></th><th><button class="example_e">Atennded class(%)</button></th></tr>';
              while($i=mysqli_fetch_array($resl))
              {
                   $k=$i['rollno'];
                    if($k==$rn){
                    echo'<tr><th rowspan="5"><input type="text" name="ut1" size="6" value='.$i['rollno'].' readonly></th><th rowspan="5"><input type="text" size="6" name="up2" value='.$i['month'].' readonly></th></tr>
                    <tr><th><input type="text" name="un31" size="5" value='.$i['s1'].' readonly></th><th><input type="text" size="2" name="up41" value='.$i['ac1'].' readonly></th>
                    <th><input type="text" name="un32" size="5" value='.$i['s2'].' readonly></th><th><input type="text" size="2" name="up42" value='.$i['ac2'].' readonly></th>
                    <th><input type="text" name="un33" size="5" value='.$i['s3'].' readonly></th><th><input type="text" size="2" name="up43" value='.$i['ac3'].' readonly></th></tr>
                    <tr><th><input type="text" name="un34" size="6" value='.$i['s4'].' readonly></th><th><input type="text" size="2" name="up44" value='.$i['ac4'].' readonly></th>
                    <th><input type="text" name="un35" size="6" value='.$i['s5'].' readonly></th><th><input type="text" size="6" name="up45" value='.$i['ac5'].' readonly></th>
                    <th><input type="text" name="un36" size="6" value='.$i['s6'].' readonly></th><th><input type="text" size="6" name="up46" value='.$i['ac6'].' readonly></th></tr>
                    <tr><th><input type="text" name="un37" size="6" value='.$i['s7'].' readonly></th><th><input type="text" size="6" name="up47" value='.$i['ac7'].' readonly></th>
                    <th><input type="text" name="un38" size="6" value='.$i['s8'].' readonly></th><th><input type="text" size="6" name="up48" value='.$i['ac8'].' readonly></th>
                    <th><input type="text" name="un39" size="6" value='.$i['s9'].' readonly></th><th><input type="text" size="6" name="up49" value='.$i['ac9'].' readonly></th></tr>
                   <tr><th><input type="text" name="un310"size="6"  value='.$i['s10'].' readonly></th><th colspan="8"><input type="text" size="6" name="up410" value='.$i['ac10'].' readonly></th></tr>';
                    
              }}
               echo'<tr ><th colspan="24" ><button onclick ="ins()" class="example_e">back</button></th></tr>';
                echo'</table>';
                     echo'<br><br><br><br><br><br></div>';
          
                }
                mysqli_close($con);
        ?>
