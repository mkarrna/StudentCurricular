<?php
$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }
               
                 session_start();
     
                $rn=$_SESSION['rn'];
               
                $name=$_POST['name'];
                $vdate=$_POST['vdate'];
                $vtime=$_POST['vtime'];
                
                $query2="SELECT * FROM addstud WHERE rollno='$rn'";
                $result2=mysqli_query($con,$query2);
                while($r=mysqli_fetch_array($result2))
                  {
                     $sc=$r['sclass'];
                     $co=$r['course'];
                     $sec=$r['section'];
    
                 }
                
                    
        {
        $query = "INSERT INTO visiting_request(rollno,sc,co,sec,name,vdate,vtime) VALUES ('$rn','$sc','$co','$sec','$name', '$vdate', '$vtime')";
        if (mysqli_query($con, $query)) {
            echo"<script>alert('succucessfully send request '); location='clienthome.html'</script>";
                   
        } }{
            echo"<script>alert('visiting request Faild'); location='clienthome.html'</script>";
                   
        }
    
    
    

?>