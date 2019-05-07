<?php 
    require '../core.inc.php';
    require '../sql.php';

    $er_no=$_SESSION['er_no'];
    if(!isset($_SESSION['er_no'])&& empty($_SESSION['er_no']))
    {
        header("location: ../index.php?err_messg=You are not logged in.");
    }
    else
    {
        $query4="SELECT * FROM blocked WHERE user='".$er_no."'";
        $Third_query=mysqli_query($con,$query4);
        $num_rows=mysqli_num_rows(mysqli_query($con,$query4));
        if($num_rows==0)
        {
            
            $query1="SELECT User_id,Score FROM users WHERE Er_No='".$er_no."'";
            $first_query=mysqli_query($con,$query1);
            $ro1=mysqli_fetch_assoc($first_query);
            $score=$ro1["Score"];
            $query="SELECT que_ans FROM question WHERE que_id='".$score."'";
            $resultQuery=mysqli_query($con,$query);
            $ro=mysqli_fetch_assoc($resultQuery);
            $que_ans=$ro["que_ans"];
        }
        else
        {
            die('You have been blocked from the play');
        }
    }
?>




<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    
    
    <title>CRYPTIC HUNT</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/14184564_955885404557001_7795093475134835546_n.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/14184564_955885404557001_7795093475134835546_n.ico">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Luckiest+Guy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    
   
    

 </head>

  <body>
    
    
	
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                           <a href="" class=""><img class="logo"src="images/Untitled-1.png"></a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        
                                        
                                        <li><a class="smoth-scroll" href="#Rules">RULES</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-section-background" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <h2><span class="typing"></span></h2>
                                    <script language=JavaScript>
{
var a="sub99";
var x='<?php echo $que_ans?>';
function check()
{
if (document.a.c.value == a)
{
document.location.href=x;
}
else
{
alert ("Try again");
}
}
}
</script>

<div align="center">
<center>
<tr>
<td width="100%">
<p align="center"><font size="1" face="Tahoma"><br>
</font><font size="6" face="Tahoma" ><p class="animated infinte pulse">Password:</p></font><form name="a" action="javascript:check()">
<p align="center">
<input class="newlogin"  type="login" name="c" maxlength="65" size="26"><br>
<br>
<input type="submit"class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll"  value=" Log In "></p>
</form></p>
</td>
</tr>
</center>
</div>
</font></b></p>

</script>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Home & Menu Section End-->
    
    
    
    
    <!-- About Start -->
    
    <footer class="footer-section">
        <div class="container">
            <div class="row">
               
      <div class="col-md-4 text-left">
          </div>
               
            <div class="col-md-4 text-center">
               <p>© Created by Development Club (C.S.I J.U.E.T)</p>
               </div>
              
             
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  
  
  </body>
 </html>