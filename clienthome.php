<?php

$a= basename($_SERVER['REQUEST_URI']);
 $r= str_replace("clienthome.php?/", "",$a);
  session_start();
               
               
                $_SESSION['rn']= $r ;
               
?>
<!DOCTYPE html>
<html>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.js"></script>
    <script src="home.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


    <style>
        h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    </style>
    <style>
        .sp-circle-link {
	position: absolute;
        z-index: 100;
        top : 140px;
	left: 63%;
	bottom: 100px;
	margin-left:-100px;
	text-align: center;
	line-height: 200px;
	width: 100px;
	height: 100px;
	background: #fff;
	color: #3f1616;
	font-size: 25px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	-webkit-animation: fadeInRotate 1s linear 2s backwards;
	-moz-animation: fadeInRotate 1s linear 2s backwards;
	-ms-animation: fadeInRotate 1s linear 2s backwards;
	animation: fadeInRotate 1s linear 2s backwards;
	-webkit-transform: scale(1) rotate(0deg);
	-moz-transform: scale(1) rotate(0deg);
	-o-transform: scale(1) rotate(0deg);
	-ms-transform: scale(1) rotate(0deg);
	transform: scale(1) rotate(0deg);
}
        .div,body{

            margin:0;
            padding: 0;
            font-family: 'Lato' , san-serif;
            font-size: 16px;

            background-image: url(image/images_1.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .ul{
            float: right;
        }
        .nav{
            width: 100%;
            background-color: rgba(450,0,60,8);
            color:#fff;
        }
        .menu{
            line-height: 45px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .nav ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .nav .menu .menu_item{
            display: inline-block;
            position: relative;
        }
        .menu_item:hover{
            background-color: red;
        }
        .nav .menu .menu_item a input{
            padding: 12px 24px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
            display: block;
        }
        .submenu{
            text-transform: none;
            display: none;
            position: absolute;
            width: 220px;
            background-color:black;
        }
        .menu_item:hover .submenu{
            display: block;
        }
        .submenu_item{
            border-left: 4px solid transparent;

        }
        .submenu_item:hover{
            background-color: rgba(0,0,0,0.6);
            border-left: 4px solid rgba(450,0,60,0.8);

        }
        .button {
            z-index: 150;
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            width:280px;

        }

        .button:hover {background-color: #3e8e41}

        .button:active {
            background-color: blueviolet;
            box-shadow: 0 5px #666;
            transform: translateY(4px);

        </style>
        <style>

        </style>


<link rel="stylesheet" href="animatiion.css">
    <link rel="stylesheet" href="tablecss.css"><link rel="stylesheet" href="home.css"><link rel="stylesheet" href="submit.css"> 

    <script type="text/javascript">
        var HDTutoApp = angular.module('HDTutoApp', []);
        HDTutoApp.controller('HDTutoCtrl', function ($scope, $location) {
            $scope.weburi = $location.absUrl();
            $scope.myhostname = $location.host();
            $scope.webportno = $location.port();
            $scope.webprotocol = $location.protocol();
        });
    </script>

    <script>

        var app = angular.module('st_app', []);
        app.controller('st_controller', function ($scope, $http, $location) {


            $scope.show_data = function () {
                $http({
                    method: "POST",
                    url: "display_notice.php",
                    data: {search_query: $scope.search_query}
                })
                        .success(function (data) {
                            $scope.student = data;
                        });
            };

            $scope.myUrl = $location.absUrl();
        });
    </script>





    <body class="w3-light-grey w3-content" style="max-width:1600px">

        <!-- Sidebar/menu -->
       <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:5;width:270px;" id="mySidebar" ><br>
            <div class="w3-container" style=BACKGROUND-COLOR:gray>
                <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                    <i class="fa fa-remove"></i>
                </a>
                <img src="college.jpg" style="width:70%;" class="w3-round"><br><br>
                <h4><b>BHANDARKARS' COLLEGE</b></h4>




                <hr color='black'>
            </div>
            <div class="w3-bar-block" style=BACKGROUND-COLOR:lightgray>
                <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>STUDENT INFORMATION</a> 
                <a href="#portfolio1" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>VISITING INFO</a> 

                <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
                <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
            </div>
            <div class="w3-panel w3-large" style=BACKGROUND-COLOR:lightgray >
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
        </nav>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main" class="div" style="margin-left:290px">

            <!-- Header -->
            <header id="portfolio">
                
                <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>

                <div class="w3-container">

                    <h1><b> <p><a href="">
   
  
                                    WELLCOME TO BHANDARKARS' ARTS&SCIENCE COLLEGE KUNDAPURA </a></p> </b></h1><br><br>
                    <img  class="sp-circle-link" src="image/bcklogo.jpg" class="avatar">
                    <div class="w3-section w3-bottombar w3-padding-16">

                        <div class="w3-section w3-bottombar   w3-padding-16">
                            <div class="w3-row-padding" style="margin:0 -16px">
                                <br>

                                <div class="w3-third w3-margin-bottom"><center>
                                        <form name="z1" method="POST" action="basic.php">         
                             
                                            <button TYPE="SUBMIT" class="button" name="w1" >
                                                <i class="fa fa-book w3-margin-right">BASIC</i>
                                        </form>
                                        </button>
                                        </form></center></div>
                                <div class="w3-third w3-margin-bottom"><center>   
                                        <button class="button">
                                            <a href="#portfolio2" onclick="w3_close()" ><b><font color="white">MARKS</font></b></a>
                                        </button></form></center></div>
                                <div class="w3-third w3-margin-bottom"><center>
                                        <form name="f3" method="POST" action="library.php">
                                            <button class="button" TYPE="SUBMIT" name="w3"><i class="fa fa-book w3-margin-right">Library Details</i>
                                        </form>
                                        </button></form></center></div>
                                </ul></div>

                            <br>
                            <div class="w3-row-padding" style="margin:0 -16px">

                                <div class="w3-third w3-margin-bottom"><center><form name="f4" method="POST" action="d_notice.php">
                            
                             
                <button TYPE="SUBMIT" name="w4" class="button" ><i class="fa fa-search  w3-margin-right">Department Notice</i></form>
                                        </form></center></div>

                                <div class="w3-third w3-margin-bottom"><center>  <button class="button"><a href="#portfolio3" onclick="w3_close()" ><font color="white">ATTENDANCE</font></a>
                                        </button></form></center></div>

                                <div class="w3-third w3-margin-bottom"><center>
                                        <button class="button">   <a href="#portfolio1" onclick="w3_close()" >
                                                <i class="fa fa-paper-plane  w3-margin-right"><b><font color="white">SEND REQUEST</font></b></i></a>   

                                        </button></button></form></center>
                                </div>



                                <div class="w3-row-padding" style="margin:0 -16px">
                                    <br>

                                    <div class="w3-third w3-margin-bottom"><center></form></center></div>
                                    <div class="w3-third w3-margin-bottom"><center> <form name="v2" method="POST" action="v1.php">   
                             
   
                                                <button TYPE="SUBMIT" name="v2" class="button" > CONFORMATION</button></form></form></center></div>
                                    <div class="w3-third w3-margin-bottom"><center></form></center></div>
                                    </ul></div><br><br><br><br><br>

                            </div>
                            </header>
                            <div class="w3-container" ng-app="st_app" ng-controller="st_controller" ng-init="show_data()">
                                <div>        <B><h3>NOTICE BOARD</h3></B>
                                    <div class="w3-section w3-bottombar w3-padding-16">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>Add Date</th>
                                                <th>Notice Type</th>
                                                <th>Notices</th>

                                            </tr>
                                            <tr ng-repeat="x in student">
                                                <th>{{x.ad_date}}</th>
                                                <th>{{x.n_type}}</th>
                                                <th>{{x.notice}}</th>




                                            </tr>
                                        </table>

                                        <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>             
                                    </div
                                </div>
                            </div>


                            <div>
                                <br><br> <br><br>
                              <header id="portfolio1">
                                        <div class="w3-container w3-padding-large w3-grey">
                                            <br><br>
                                            <h4 id="contact"><center><b>Request for Visiting to college</b></center></h4>
                                            <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                                                <div class="w3-third w3-dark-grey">
                                                    <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                                                    <p>basck1963@rediffmail.com</p>
                                                </div>
                                                <div class="w3-third w3-teal">
                                                    <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                                                    <p>Kundapura, India</p>
                                                </div>
                                                <div class="w3-third w3-dark-grey">
                                                    <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                                                    <p>08254-230369</p>
                                                </div>
                                            </div>
                                            <hr class="w3-opacity">
                                            <form name="k1" action="insert_v.php" method="post">
                                               
                                                <div class="w3-section">
                                                    <label>visitor Name</label>
                                                    <input type="text" class="w3-input w3-border" name="name" required>
                                                </div>
                                                <div class="w3-section">
                                                    <label>Visiting Date</label>
                                                    <input type="date" class="w3-input w3-border" name="vdate" required>
                                                </div>
                                                <div class="w3-section">
                                                    <label>Visiting Time</label>
                                                    <input type="time" class="w3-input w3-border" name="vtime" required>
                                                </div>
                                                <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Request</button>
                                            </form>
                                        </div></header> <br><br> <br><br> 
                                


                                <!-- First Photo Grid-->
                               <header id="portfolio2">
                                        <DIV style=BACKGROUND-COLOR:gray><br><br>
                                            <center> <p><b><H2>MARKS DETAILS IN SEMESTER WISE</H2></b></p></center>

                                                <div class="w3-section w3-bottombar   w3-padding-16">
                                                    <div class="w3-row-padding" style="margin:0 -16px">
                                                        <br><br> <br><br>

                                                        <div class="w3-third w3-margin-bottom"><center><form name="ma1" method="POST" action="m1.php"> <input type="hidden" name="mr1" value="170471" ><input type="submit" name="m1" value="1Semester"></form></center></div>
                                                        <div class="w3-third w3-margin-bottom"><center><form name="ma2" method="POST" action="m2.php"> <input type="hidden" name="mr2" value="170471" ><input type="submit" name="m2" value="2Semester"></form></center></div>
                                                        <div class="w3-third w3-margin-bottom"><center><form name="ma3" method="POST" action="m3.php"> <input type="hidden" name="mr3" value="170471" ><input type="submit" name="m3" value="3Semester"></form></center></div>
                                                        </ul></div>

                                                    <br><br> <br><br>
                                                    <div class="w3-row-padding" style="margin:0 -16px">

                                                        <div class="w3-third w3-margin-bottom"><center><form name="ma4" method="POST" action="m4.php"> <input type="hidden" name="mr4" value="170471" ><input type="submit" name="m4" value="4Semester"></form></center></div>
                                                        <div class="w3-third w3-margin-bottom"><center> <form name="ma5" method="POST" action="m5.php"> <input type="hidden" name="mr5" value="170471" ><input type="submit" name="m5" value="5Semester"></form></center></div>
                                                        <div class="w3-third w3-margin-bottom"><center><form name="ma6" method="POST" action="m6.php"> <input type="hidden" name="mr6" value="170471" ><input type="submit" name="m6" value="6Semester"></form></center></div>



                                                    </div>
                                                    <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br> <br><br>


                                                 </header>

                                            <header id="portfolio3">
                                                    <DIV style=BACKGROUND-COLOR:gray > <br><br>
                                                        <center> <p><b><H2>ATTENDANCE DETAILS IN SEMESTER WISE</H2></b></p></center>
                                                            <div class="w3-section w3-bottombar w3-padding-16">
                                                                <div class="w3-row-padding" style="margin:0 -16px">
                                                                    <br><br> <br><br>

                                                                    <div class="w3-third w3-margin-bottom"><center><form name="an1" method="POST" action="a1.php"> <input type="hidden" name="a1" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value='1102' >
                                                                    <input type="submit" class="btn" name="aa1" value="1Semester"></form></li></center></div>
                                                                    <div class="w3-third w3-margin-bottom"><center><form name="a2" method="POST" action="a2.php"> <input type="hidden" name="mr2" value="170471" ><input type="submit" class="btn" name="a2" value="2Semester"></form></li></center></div>
                                                                    <div class="w3-third w3-margin-bottom"><center><form name="a3" method="POST" action="a3.php"> <input type="hidden" name="mr3" value="170471" ><input type="submit" class="btn" name="a3" value="3Semester"></form></li></center></div>
                                                                    </ul></div>

                                                                <br><br> <br><br>
                                                                <div class="w3-row-padding" style="margin:0 -16px">

                                                                    <div class="w3-third w3-margin-bottom"><center><form name="a4" method="POST" action="a4.php"> <input type="hidden" name="mr4" value="170471" ><input type="submit" class="btn-3d-sub" name="a4" value="4Semester"></li></center></div>
                                                                                <div class="w3-third w3-margin-bottom"><center><form name="a5" method="POST" action="a5.php"> <input type="hidden" name="mr5" value="170471" ><input type="submit"  class="btn-3d-sub" name="a5" value="5Semester"></li></center></div>
                                                                                            <div class="w3-third w3-margin-bottom"><center><form name="a6" method="POST" action="a6.php"> <input type="hidden" name="mr6" value="170471" ><input type="submit" class="btn-3d-sub" name="a6" value="6Semester"></form></li></center></div>


                                                                                            <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br>
                                                                                            </div></DIV>

                                                                                            </header>
                                                                                            
                                                                                            



                                                                                            <!-- Pagination -->
                                                                                            <div class="w3-center w3-padding-32">
                                                                                                <div class="w3-bar">
                                                                                                    <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                                                                                                    <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                                                                                                    <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                                                                                                    <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                                                                                                    <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                                                                                                    <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
                                                                                                </div>
                                                                                            </div>

                                                                                             <!-- Images of Me --><CENTER>
                                                                                            <div class="w3-row-padding w3-padding-16" id="about">
                                                                                                <div class="w3-col m6">
                                                                                                    <img src="image/BCK.jpg" alt="Me" style="width:50%">
                                                                                                </div>
                                                                                               
                                                                                            </div></CENTER>
                                                                                            <div class="w3-container w3-padding-large" style="margin-bottom:32px">
                                                                                              <div class="w3-container w3-padding-large" style="margin-bottom:32px">
                                                                                              <B>  <h3><b>About college</b></h3>
                                                                                                <p>The executive committee of the national assessment and accreditation council on the recommendation of the duly appointed peer team is pleased to declared the BHANDARKARS' ARTS AND SCIENCE COLLEGE KUNDAPURA. Accredited with CGPA of 3.32 on seven point scale at A grade valid up to september 11,2020.</p>
                                                                                                <hr>

                                                                                                <h4>Facility</h4>
                                                                                                <!-- Progress bars / Skills -->
                                                                                                <p>sports</p>
                                                                                                <div class="w3-grey">
                                                                                                    <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:95%">95%</div>
                                                                                                </div>
                                                                                                <p>Library</p>
                                                                                                <div class="w3-grey">
                                                                                                    <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:85%">85%</div>
                                                                                                </div>
                                                                                                <p>Hostel</p>
                                                                                                <div class="w3-grey">
                                                                                                    <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:80%">80%</div>
                                                                                                </div></B>
                                                                                                
                                                                                                <hr>

                                                                                              
                                                                                                  

                                                                                            <!-- Contact Section -->
                                                                                            <div class="w3-container w3-padding-large w3-grey">
                                                                                                <h4 id="contact"><b>Contact Me</b></h4>
                                                                                                <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                                                                                                    <div class="w3-third w3-dark-grey">
                                                                                                        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                                                                                                        <p>basck1963@rediffmail.com</p>
                                                                                                    </div>
                                                                                                    <div class="w3-third w3-teal">
                                                                                                        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                                                                                                        <p>Kundapura, India</p>
                                                                                                    </div>
                                                                                                    <div class="w3-third w3-dark-grey">
                                                                                                        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                                                                                                        <p>08254-230369</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr class="w3-opacity">
                                                                                                <form action="/action_page.php" target="_blank">
                                                                                                    <div class="w3-section">
                                                                                                        <label>Rollnumber</label>
                                                                                                        <input class="w3-input w3-border" type="text" name="Name" required>
                                                                                                    </div>
                                                                                                    <div class="w3-section">
                                                                                                        <label>Email</label>
                                                                                                        <input class="w3-input w3-border" type="text" name="Email" required>
                                                                                                    </div>
                                                                                                    <div class="w3-section">
                                                                                                        <label>Message</label>
                                                                                                        <input class="w3-input w3-border" type="text" name="Message" required>
                                                                                                    </div>
                                                                                                    <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
                                                                                                </form>
                                                                                            </div>

                                                                                          
                                                               

                                                                                            <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="TREND FRIENDS" target="_blank" class="w3-hover-opacity">TREND FRIENDS</a></div>

                                                                                            <!-- End page content -->
                                                                                            </div>

                                                                                            <script>
                                                                                            // Script to open and close sidebar
                                                                                                function w3_open() {
                                                                                                    document.getElementById("mySidebar").style.display = "block";
                                                                                                    document.getElementById("myOverlay").style.display = "block";
                                                                                                }

                                                                                                function w3_close() {
                                                                                                    document.getElementById("mySidebar").style.display = "none";
                                                                                                    document.getElementById("myOverlay").style.display = "none";
                                                                                                }
                                                                                            </script>

                                                                                            </body>
                                                                                            </html>
