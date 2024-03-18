<?php

$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
                session_start();
     
                $rn=$_SESSION['rn'];
                
                $query2="SELECT * FROM addstud WHERE rollno='$rn'";
                $result2=mysqli_query($con,$query2);
                while($r=mysqli_fetch_array($result2))
                  {
                     
                     $co=$r['course'];
                     
    
                 }
                $currentdate = date('Y-m-d');
                $sql="select * from de_notices WHERE rem_date >='$currentdate' AND ( dept = '$co')";
                $resl=mysqli_query($con,$sql);
                if(mysqli_num_rows($resl)==0)
                {
                       echo'<html><body> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><table class="table table-striped table-bordered" align="center">
                          <tr><th> DOES NOT EXISTED </th></tr>
                <tr><th><button class="example_e"> <a href="clienthome.html" title="TREND FRIENDS" target="_blank" class="w3-hover-opacity"><b><h2>BACK MENU</h2></b></a></button></th></table>';

                }
                else{
                    echo'<script type="text/javascript">
                             function ins()
                                {
                                       window.location="clienthome.html"
                                 }</script>';
                     echo' <link rel="stylesheet" href="tablecss.css"><link rel="stylesheet" href="button.css">';
                  
                    echo'<div><br><br><CENTER><h1><b>DEPARTMENT NOTICES</b></h1></CENTER>';
                    echo'<table border=2px>';
                    echo'<tr><th><button class="example_e">notice number</button></th><th><button class="example_e">notice</button></th><th><button class="example_e">ended date Date</button></th></tr>';
                while($i=mysqli_fetch_array($resl))
                {
                    
                
                    $k=$i['dept'];
                    if($k=="BCom" || "bcom"){
                    
                     
                    echo'<tr><th><input type="text" name="ut1" value='.$i['notice_no'].' readonly></th><th><input type="text" name="up2" value='.$i['notice'].' readonly></th><th><input type="text" name="un3" value='.$i['rem_date'].' readonly></th></tr>';
                    
                    
                  
                }}
                  echo'<tr ><th colspan="3"><button onclick ="ins()" class="example_e">back</button></th>';
                echo'</table></body></html>';
                    }
              
                mysqli_close($con);
        ?>
