<?php

$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
                
                   session_start();
     
                $rn=$_SESSION['rn'];
                $sql="select * from visiting_request WHERE rollno = '$rn'";
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
                    echo'<div><link rel="stylesheet" href="tablecss.css"><link rel="stylesheet" href="button.css">';
                    echo'<CENTER><h1><b>VISITNG CONFORMATION INFORMATION</b></h1></CENTER>';
                    echo'<table border=2px>';
                    echo'<tr><th><button class="example_e">Roll number</button></th><th><button class="example_e">Visitor name</button></th><th><button class="example_e">Visiting Date</button></th><th><button class="example_e">visiting time</button></th><th><button class="example_e">conformation</button></th></tr>';
                while($i=mysqli_fetch_array($resl))
                {
                    
                
                    $k=$i['rollno'];
                    if($k==$rn){
                    
                     
                    echo'<tr><th><input type="text" name="ut1" value='.$i['rollno'].' readonly></th><th><input type="text" name="up2" value='.$i['name'].' readonly></th><th><input type="text" name="un3" value='.$i['vdate'].' readonly></th><th><input type="text" name="up4" value='.$i['vtime'].' readonly></th><th><input type="text"  name="up5" value='.$i['conf'].'  Not_conformed readonly></th></tr>';
                    
                    
                    
                }} echo'<tr><th colspan="5"><button onclick ="ins()" class="example_e">back</button></th>';
                echo'</table><br><br><br></div>';}
               
                mysqli_close($con);
        ?>
