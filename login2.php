<?php
$con=mysqli_connect(localhost,'root','','student');
                if(mysqli_connect_error())
                {
                    echo'connetcion filed';
                }

    $username = $_POST['un'];
    $password = $_POST['ps'];
    $sql = "select * from adminlogin";
    $rslt=mysqli_query($con,$sql);
    if($username=="admin" && $password=="admin")
    {
        echo"<script>location='adminpage.html'</script>";
      
    }
    while($r=mysqli_fetch_array($rslt))
    {
        $user=$r['username'];
        $pass=$r['password'];
        $sc=$r['sclass'];
        $co=$r['course'];
        $sec=$r['section'];
        session_start();
               
                $_SESSION['sc']=$sc;
                $_SESSION['co']=$co;
                $_SESSION['sec']=$sec;
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
        if($username==$user && $password==$pass ){
            if($sc=="I"){
            echo"<script>location='year1.html'</script>";
            exit();
            }
              if($sc=="II"){
            echo"<script>location='year2.html'</script>";
            exit();
            }
            else if($sc=="III")
            {
            echo"<script>location='year3.html'</script>";
            exit();
            }
              else if($username=="LIBRAREAN")
            {
            echo"<script>location='librarean.html'</script>";
            exit();
            }
                else 
            {
            echo"<script>location='hod.html'</script>";
            exit();
            }
        }
        session_destroy();
    }
    {
        echo"<script>alert('Login UnSuccessful');location='login.html'</script>";
    }         
mysqli_close($con);
?>
