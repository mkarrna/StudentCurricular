<?php

$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
                 session_start();
     
                $rn=$_SESSION['rn'];
                $sql="select * from library WHERE rollno = '$rn'";
                $resl=mysqli_query($con,$sql);
                if(mysqli_num_rows($resl)==0)
                {
                          echo' <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><table class="table table-striped table-bordered" align="center">
                          <tr><th> DOES NOT EXISTED </th></tr>
                <tr><th><button class="example_e"> <a href="clienthome.html" title="TREND FRIENDS" target="_blank" class="w3-hover-opacity"><b><h2>BACK MENU</h2></b></a></button></th></table>';

                }
                else{
                    echo'<script type="text/javascript">
                             function ins()
                                {
                                       window.location="clienthome.html"
                                 }</script>';
                    echo' 
                    <link rel="stylesheet" href="tablecss.css"><link rel="stylesheet" href="button.css">';
                    echo'<div><CENTER><h1><b>STUDENT LIBRARY INFORMATION</b></h1></CENTER>';
                    echo'<table border=2px>';
                    echo'<tr><th><button class="example_e">Roll number</button></th><th><button class="example_e">Book number</button></th><th><button class="example_e">Borred Date</button></th><th><button class="example_e">Return Date</button></th></tr>';
                while($i=mysqli_fetch_array($resl))
                {
                    
                
                    $k=$i['rollno'];
                    if($k==$rn){
                    
                     
                    echo'<tr><th><input type="text" name="ut1" value='.$i['rollno'].' readonly></th><th><input type="text" name="up2" value='.$i['bn'].' readonly></th><th><input type="text" name="un3" value='.$i['bd'].' readonly></th><th><input type="text" name="up4" value='.$i['rd'].' readonly></th></tr>';
                    
                    
                    
                }}
                 echo'<tr><td colspan="4" ><button onclick ="ins()" class="example_e">back</button></td></tr>';
                echo'</table></body></html>';
                    }
               
                mysqli_close($con);
        ?>
