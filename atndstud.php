<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
    </head>
    <body>
<?php

 $con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
                


    $sql = "SELECT * FROM attendence ORDER BY rollno";
    $resl=mysqli_query($con,$sql);
                if(mysqli_num_rows($resl)<=0)
                {
                    echo'does not exist';
                }
                else
                    {
                    
                    echo'<div>';
        echo'<table class="table table-striped table-bordered">';
               echo' <tr>';
                     echo'<th>rollnumber</th>';
                    echo'<th>semester</th>';
                    echo'<th>months</th>';
                    echo'<th>total_class</th>';
                    echo'<th>attende class</th>';
                    
               echo' </tr>';
               while($i=mysqli_fetch_array($resl))
               {
               echo' <tr>';
                  echo'  <td><input type="text" name="ut" value='.$i['rollno'].' readonly></td>';
                   echo' <td><input type="text" name="ut1" value='.$i['sem'].' readonly></td>';
                   echo' <td><input type="text" name="ut2" value='.$i['mon'].' readonly></td>';
                   echo' <td><input type="text" name="ut3" value='.$i['noc'].' readonly></td>';
                    echo'<td><input type="text" name="ut4" value='.$i['atc'].' readonly></td>';
               }
                echo'</tr>';
       echo'</table>';
       echo' </div>';
                    
                    }         
                    
                    
                   
                
                mysqli_close($con);
                    

?>
    </body>
</html>