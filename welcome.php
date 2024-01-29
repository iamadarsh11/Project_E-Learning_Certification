<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="utf-8"/>

  
  <title>Welcome Page</title>
  <link rel="icon" href="images/title_icon.jpeg" type="image/x-icon">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>
  
  <link rel="stylesheet" type="text/css" href="css/course.css">


  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link href="css/component.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/green.css" media="screen" id="color-opt" />

  
</head>

<body data-spy="scroll" data-offset="80">

  <!-- Preloader -->
  <div class="animationload">
    <div class="loader">
        Welcome to JustASSK Course
    </div>
  </div> 

  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">JustASSK</a>
      </div>

           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">Home</a></li>
          <li><a href="#AboutUs">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a class="btn btn-custom" href="index.html">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  

    <!-- /HOME -->
    <section class="main-home" id="home">
      <div class="home-page-photo"></div> 
      <div class="home__header-content">
        <div id="main-home-carousel" class="owl-carousel">
          <div>
        
            <h1 class="intro-title">WELCOME TO JUSTASSK WEB DEVELOPMENT COURSE</h1>
            <p class="intro-text">DIVE DEEP INTO WEB DEVELOPMENT</p>
            
          </div>

         
        </div>
      </div>
    </section>
       
 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							<div class="section-title text-center">
 								<h2><b>TERMS AND TECHNOLOGIES</b></h2>
 								<div class="sub-heading">
 									Following are the available languages and techniques used in web development <br>
 									Start learning today
 								</div>
 							</div>
 						</div>
 					</div>
<br>

 					

<?php


			 

               $con=mysqli_connect('localhost','root');


               mysqli_select_db($con,'learning');
   
               $q="select * from programming_languages";
               $query=mysqli_query($con,$q);
               while ($res=mysqli_fetch_array($query)) {
                

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
 										<img src="<?php echo $res['language_img']; ?>" class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content">
 										<p>
 											<?php echo $res['language_description']; ?>
 										</p><br>
                     
 										<a href="programming/chapters/content_display.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
 									</div>
 								</div>
 							</div>

		

<?php } ?>



 				</div>
 				
 			</section>

     
    <section class ="Team" id="Team">
   <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">FINAL TEST</h3>
            <div class="titleHR"></div>
          </div>
        </div>
    <div class="row">
  

  <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.X2VnpjwxD1goNBPTqH1segHaFg?w=215&h=180&c=7&o=5&pid=1.7" alt="Mike" style="width:100%">
      <div class="team-container">
        <p><a class="btn btn-success" href="http://localhost/Justassk/online_quize/final_test_quizhome.php?course_name=final_test">Start Test</a></p>
      </div>
    </div>
  </div>

  
</div>
 </div>
 </div> 
 </div>
 </section>

    <section class="About" id="AboutUs">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <h3 class="title text-center">About Us</h3>
            <div class="titleHR">
            </div>
          </div>
        </div>
        
        <div class="row">
         

          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="text-center services-item">
              <div class="col-wrapper">
                <p>This website is web development tutorial and Certification platform.This tutorial includes,HTML and CSS, Bootstrap, MySQL and Php.This website has been designed keeping beginner level learners in mind.There are quizzes at the end of each module and one final test at the end, On the basis of which you will be awarded a "Certificate of Achievement"(Beginner level). We hope you enjoy using this tutorial and wish you a great career ahead.</p>
              </div>
            </div>
          </div>

        </div>
    </section>
    


        <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Contact Us</h3>
            <div class="titleHR"></div>
            <h4><center><b>We are here to help you</b></center></h4>

            <form role="form" name="ajax-form" id="ajax-form" action="contact.php" method="post" class="form-main">
              <div class="col-xs-12">
                <div class="row">            
                  <div class="form-group col-xs-6">
                    <label for="name2">Name</label>
                    <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                    <div class="error" id="err-name" style="display: none;">Please enter name</div>
                  </div>
                  <div class="form-group col-xs-6">
                    <label for="email2">Email</label>
                    <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                    <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
                  </div>
                </div>
                <div class="row">            
                  <div class="form-group col-xs-12">
                    <label for="message2">Message</label>
                    <textarea class="form-control" id="message2" name="message" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Message</textarea>
                    <div class="error" id="err-message" style="display: none;">Please enter message</div>
                  </div>
                </div> 
               
                <div class="row">            
                  <div class="col-xs-12 text-center">
                    <div id="ajaxsuccess">E-mail was successfully sent.</div>
                    <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                    <div class="error" id="err-state"></div>
                    <button type="submit" class="btn btn-custom" id="send">Submit</button>
                  </div>
                </div>
              </div>  
            </form>
          </div>
        </div> 
      </div>
    </section>
   

        <footer id="footer">    
      <div class="footer-widgets-wrap">
        <div class="container text-center">    
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>KEEP IN TOUCH</h4>
                <div class="footer-socials">
                  <a href=" https://www.facebook.com/justassk3/" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/justassk3/" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://mobile.twitter.com/Justassk3" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.linkedin.com/mwlite/in/just-assk-a029a2213" target="_blank"><i class="fa fa-linkedin"></i></a><br>
                </div>
                <p>All copyrights reserved to JustASSK Project-I @2021</p>
              </div> 
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>ADDRESS</h4>
                <p> 
                MCE Motihari<br>
                NH-28A FURSHATPUR<br>
                845401</p>
                <p>+91 7543931675<br>
                <a href="#">www.justASSK.com</a><br>
                Justassk3@gmail.com.com</p>
              </div> 
            </div> 
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>NAVIGATIONS</h4>
                 <a href="#home"><p>HOME</p></a>
                 <a href="#AboutUs"><p>ABOUT US</p></a>
                <a href="#contact"><p>CONTACT US</p></a></div>  
            </div>
          </div>
        </div> 
      </div>
     
    </footer>
  

    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>


    
    <div id="style-switcher" style="left: 0px;">
        <div>
            <h3>Select your color</h3>
            <ul class="pattern">
                <li><a class="color1" href="#"></a></li>
                <li><a class="color2" href="#"></a></li>
                <li><a class="color3" href="#"></a></li>
                <li><a class="color4" href="#"></a></li>
                <li><a class="color5" href="#"></a></li>
                <li><a class="color6" href="#"></a></li>
                <li><a class="color7" href="#"></a></li>
                <li><a class="color8" href="#"></a></li>
                <li><a class="color9" href="#"></a></li>
                <li><a class="color10" href="#"></a></li>
                <li><a class="color11" href="#"></a></li>
                <li><a class="color12" href="#"></a></li>
            </ul>
        </div>      
        <div class="bottom">
            <a href="#" class="settings"><i class="fa fa-refresh fa-spin"></i></a>
        </div>
    </div>
    <!-- end Style switcher --> 


    
     <script src="js/jquery.min.js"></script>
     <!-- jquery easing -->
     <script src="js/jquery.easing.min.js"></script>
     <!-- Bootstrap -->
     <script src="js/bootstrap.min.js"></script>
     <!-- modal-effect -->
     <script src="js/classie.js"></script>
     <script src="js/modalEffects.js"></script>
     <!-- Counter-up -->
     <script src="js/waypoints.min.js" type="text/javascript"></script>
     <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
     <!-- SmoothScroll -->
     <script src="js/SmoothScroll.js"></script>
     <!-- Parallax -->
     <script src="js/jquery.stellar.min.js"></script>
     <!-- Jquery-Nav -->
     <script src="js/jquery.nav.js"></script>
     <!-- Owl carousel -->                                                      
     <script type="text/javascript" src="js/owl.carousel.min.js"></script>
     <!-- App JS -->
     <script src="js/app.js"></script>

     <!-- Switcher script for demo only -->
    <script type="text/javascript" src="js/switcher.js"></script>


  </body>
</html>
