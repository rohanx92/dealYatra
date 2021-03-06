<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from balapastudio.co/neko/solid-bg/top-bar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 10:38:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="Responsive Bootstrap App Landing Page">
    <meta name="keywords" content="Neko, Bootstrap, App, Mobile, Landing page, Responsive theme, Responsive Template">
    <meta name="author" content="Bhakti Al Akbar Pasaribu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <!-- Add title to your website -->
    <title>Neko - Responsive Bootstrap App Landing Page</title>

    <!-- Connect the html files to css files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/entypo.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/nivo-lightbox.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/color-switcher.css" rel="stylesheet">
         
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">

    <!-- Linking to online google font Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>	
	
    <!-- Default theme color -->
    <link rel="stylesheet" href="css/colors/blue.css" title="blue">
    
    <!-- Change CSS color. FOR DEMO ONLY -->
    <link rel="alternate stylesheet" href="css/colors/green.css" title="green">
    <link rel="alternate stylesheet" href="css/colors/purple.css" title="purple">
    <link rel="alternate stylesheet" href="css/colors/yellow.css" title="yellow">
    <link rel="alternate stylesheet" href="css/colors/red.css" title="red">
    <link rel="alternate stylesheet" href="css/colors/orange.css" title="orange">
    <link rel="alternate stylesheet" href="css/colors/brown.css" title="brown">
    <link rel="alternate stylesheet" href="css/colors/pink.css" title="pink">
    <!-- End of CSS color link -->
  
  </head>
    
  <body>
      
      <!-- Message notification -->
      <em class="success">Your email has been sent successfully <span class="icon-cross close"></span></em>
      
	  <!-- BEGIN DIV #TOP-NAVBAR -->
	  <nav id="top-navbar" class="navbar navbar-default navbar-fixed-top fade out" role="navigation">
	  
		<!-- Navbar header contains logo-navbar and toggle button -->  
		<div class="navbar-header">
			   
			<!-- Button .navbar-toggle -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button><!-- end of Button .navbar-toggle -->
            
            <!-- Navbar logo -->
			<a class="navbar-brand" href="#home"><img class="navbar-logo" src="img/navbar-logo.png" alt="Navbar logo"></a>
            
		</div><!-- end of div .navbar-header -->
      
		<!-- Div .navbar-collapse contains the list items, it collapse when you resize to mobile size -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			<!-- Ul .nav contains the menu list such as home, features, ect. -->
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-home">Home</li>
				<li class="nav-feat">Features</li>
                <li class="nav-acti">Action</li>
				<li class="nav-why">Why Us?</li>
				<li class="nav-desc">Describe</li>
				<li class="nav-scre">Screenshot</li>
				<li class="nav-cont">Contact</li>
			</ul>
            <!-- end of ul .nav -->
				
		</div><!-- end of div .navbar-collapse -->
		  
	  </nav>
      <!-- END OF DIV #TOP-NAVBAR -->
      
      
      <!-- ******************************************************************** -->
      
      
	  <!-- BEGIN DIV #MAIN-CONTENT-->
	  <div id="main-content" class="fade out">
  	  
          <!-- BEGIN DIV #HOME -->
          <div id="home">

              <!-- div .row wraps thes col-md, col-lg from bootstrap -->
              <div class="row background-solid">
                  
                  <!-- Big logo -->
                  <img class="big-logo" src="img/big-logo.png" alt="Big logo">
                  
                  <!-- Div #home .left-column -->
                  <div class="col-md-6 col-lg-6 left-column">
                      
                    <!-- #Home title -->
                    <h1>Neko is <strong>appropriate</strong> theme to<br> present your app beautifully.</h1>
                      
                    <!-- #Home description -->
                    <h5>Available on App store, Windows store and Play store.</h5>

                    <!-- The download button container makes the download button to be centered -->
                    <div class="download-button-container">
                        
                        <!-- Download button -->
                        <p class="centering">
                            <a class="download-button" href="#" target="_blank">
                                <img src="img/buttons/app-store.png" alt="App store button">
                            </a><!-- End of download button -->
                        </p>
                        
                        <p class="centering">
                            <a class="other" href="#downloads-target">Other downloads?</a>
                        </p>
                      
                    </div><!-- End of download button container -->
                      
                  </div>
                      
                  <!-- Div #home .right-column -->
                  <div class="col-md-6 col-lg-6 right-column" data-wow-delay="2s">

                      <form class="login">
                        <label>Username</label>
                        <input class="username" type="text" placeholder="Username">

                        <label>Password</label>
                        <input class="password" type="password" placeholder="Password">

                        <p class="righting">
                          <input type="submit" value="Login">
                        </p>

                        <p class="login-description">Need an account?
                          <span id="signup-button" class="login-button">Sign up</span>
                        </p>

                      </form>
                      
                      
                      <form class="signup" data-toggle="validator" role="form">
                      <div id="success"></div>
                         <label>First and Last name</label>
                        <input class="fullname form-control" type="text" placeholder="Full name" required data-validation-required-message="Please enter your name." >
                        
                        <label>Email</label>
                        <input class="email form-control" type="email" placeholder="Email" required >

                        <label>Phone</label>
                        <input class="phone" type="tel" placeholder="Phone" required pattern="[0-9]{10}">
                        
                        <input type="checkbox" required>
                          <span class="checkbox-detail">I understand and agree with the terms.</span>

                        <p class="righting">
                          <input type="submit" id="submit" value="Sign Up">
                        </p>

                        <p class="login-description">Already have an account?
                          <span class="login-button">Login</span>
                        </p>
                        
                        

                      </form>
                  
                  </div><!-- end of div #home .right-column -->

                </div><!-- end of div .background-solid -->
                  
                  
              </div><!-- end of div .row -->

          <!-- END OF DIV #HOME -->

      
          <!-- ******************************************************************** -->


          <!-- Div #features-target is the fake id that we use to jump when we click menu on top-navbar -->
          <div id="features-target"></div>

          <!-- BEGIN OF DIV #FEATURES -->
          <div id="features" class="features">

              <!-- Div #features title -->
              <h1 class="wow bounceIn" data-wow-offset="100"><strong>Awesome</strong> Features</h1>

              <!-- Container colored line -->
              <div class="container-colored-line wow bounceIn" data-wow-offset="200">

                <!-- Colored line -->
                <hr class="colored-line">

                <!-- Additional colored line -->
                <div class="add-colored-line"></div>

              </div><!-- End of container colored line -->

              <!-- Div #features description -->
              <em class="wow fadeInDown" data-wow-delay=".3s" data-wow-offset="200">List your app features with icons and tooltips.</em>

              <!-- BEGIN DIV .CONTAINER-COLUMN -->
              <div class="row container-column">

                <!-- Div #features - top column -->
                <div class="col-md-12 col-lg-12 top-column wow bounceInLeft">
                    
                    <div class="col-md-4">
                        
                        <div class="icon icon-map"></div>
                        <h4>Responsive Design</h4>
                        <em>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt.</em>
                    
                    </div>
                    <div class="col-md-4">

                        <div class="icon icon-eye"></div>
                        <h4>Retina Display</h4>
                        <em>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt.</em>
                        
                    </div>
                    <div class="col-md-4">

                        <div class="icon icon-sun2"></div>
                        <h4>Awesome Animation</h4>
                        <em>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt.</em>
                        
                    </div>                                   				

                </div><!-- end of div #features left column -->

                <!-- *************************** -->

                <!-- Div #features - bottom column -->
                <div class="col-md-12 col-lg-12 bottom-column wow bounceInRight">
                    
                    <div class="col-md-4">
                    
                        <div class="icon icon-code"></div>
                        <h4>Bootstrap 3.1</h4>
                        <em>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt.</em>
                    
                    </div>
                    <div class="col-md-4">


                        <div class="icon icon-mobile"></div>
                        <h4>Cross Browsers</h4>
                        <em>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt.</em>
                        
                    </div>
                    <div class="col-md-4">

                        <div class="icon icon-infinity"></div>
                        <h4>700+ Fonts</h4>
                        <em>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt.</em>
                        
                    </div>  

                </div><!-- end of div #features left column -->
                  
              </div>
              <!-- END OF DIV .CONTAINER-COLUMN -->
              
          </div>
          <!-- END OF DIV #FEATURES -->


          <!-- ******************************************************************** -->
      
          
          <!-- Div #ction-target is the fake id that we use to jump when we click menu on top-navbar -->
          <div id="action-target"></div>
      
          <!-- BEGIN DIV #ACTION -->
          <div id="action">
              
              <!-- Div #action title -->
              <h1 class="wow bounceIn" data-wow-offset="100">See in <strong>Action</strong></h1>

              <!-- Container colored line -->
              <div class="container-colored-line wow bounceIn" data-wow-offset="200">

                <!-- Colored line -->
                <hr class="colored-line">

                <!-- Additional colored line -->
                <div class="add-colored-line"></div>

              </div><!-- End of container colored line -->

              <!-- Div #action description -->
              <em class="wow fadeInDown" data-wow-delay=".3s" data-wow-offset="200">Describe your app features interactively.</em>
      
              <div class="container-app wow bounceIn" data-wow-offset="100">
                  
                  <div class="container-comment top">
                    <div class="indicator wow bounceIn" data-wow-offset="250"></div>
                    <div class="comment wow fadeInLeft" data-wow-delay=".5s" data-wow-offset="250">Your profile picture goes here lorem ipsum.</div>
                  </div>
                  
                  <div class="container-comment-right">
                    <div class="indicator-right wow bounceIn" data-wow-offset="250"></div>
                    <div class="comment-right wow fadeInRight" data-wow-delay=".5s" data-wow-offset="250">Check out your new activity lorem ipsum.</div>
                  </div>
                  
                  <div class="container-comment bottom">
                    <div class="indicator wow bounceIn" data-wow-offset="200"></div>
                    <div class="comment wow fadeInLeft" data-wow-delay=".5s" data-wow-offset="250">This app is great, i love this lorem ipsum.</div>
                  </div>
              
              </div>
      
          </div>
          <!-- END OF DIV #ACTION -->
      
      
          <!-- ******************************************************************** -->


          <!-- Div #why-target is the fake id that we use to jump when we click menu on top-navbar -->
          <div id="why-target"></div>

          <!-- BEGIN DIV #WHY -->
          <div class="brief" id="why">  

              <!-- Begin div .row -->
              <div class="row">

                <!-- Container phones wraps two phones -->
                <div class="col-md-6 col-lg-6 container-phones">

                    <!-- The first phone mockup -->
                    <div class="wow bounceInLeft" data-wow-offset="250" data-wow-delay=".35s" data-wow-duration="1.2s">
                        <img class="first-phone" src="img/mockup/second-phone.png" alt="Apps mockup">
                    </div>

                    <!-- The second phone mockup -->
                    <div class="wow bounceInLeft" data-wow-offset="250" data-wow-duration="1.2s">
                        <img class="second-phone" src="img/mockup/main-phone.png" alt="Apps mockup">
                    </div>

                </div><!-- end of container-phones -->

                <!-- Div #why - right column -->
                <div class="col-md-6 col-lg-6 right-column">
                    
                    <!-- Div #why title -->
                    <h1 class="title wow fadeInRight" data-wow-offset="300">Because it's <strong>awesome</strong></h1>

                    <!-- Container colored line two -->
                    <div class="container-colored-line-two wow bounceInRight" data-wow-offset="300">
                        
                        <!-- Colored line two -->
                        <hr class="colored-line-two">
                        
                        <!-- Additional colored line two -->
                        <div class="add-colored-line-two"></div>
                    </div><!-- end of container colored line two -->

                    <!-- Div #why description -->
                    <em class="description wow fadeInDown" data-wow-delay=".3s" data-wow-offset="300">Tell people why this app awesome.</em>

                    <!-- Div .description -->
                    <div class="container-description">
                        
                        <p class="why-description wow fadeInRight" data-wow-offset="300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Donec ac facilisis ante. Praesent gravida tempus suscipit.<br>
                            Praesent vel sem id ligula malesuada vehicula at id orci. 
                            In sem quam, semper id fringilla sed, sodales a ante. Ut molestie a lorem in luctus.
                        </p>
                                                
                     </div><!-- end of div .description -->
                    
                     <div class="container-other-download wow bounceInRight" data-wow-offset="300">
                            <a href="#" class="get">Get App</a>
                            <a href="#" class="learn">Learn more + </a>
                        </div>

                  </div><!-- end of div #why right column -->

              </div><!-- end of div .row -->

          </div>
          <!-- END OF DIV #WHY -->


          <!-- ******************************************************************** -->
      

          <!-- Div #describe-describe is the fake id that we use to jump when we click menu on top-navbar -->
          <div id="describe-target"></div>

          <!-- BEGIN DIV #DESCRIBE -->
          <div class="brief" id="describe">  

              <!-- Begin div .row -->
              <div class="row">

                <!-- Div #why - left column -->
                <div class="col-md-6 col-lg-6 left-column">
                    <h1 class="title wow fadeInLeft" data-wow-offset="300"><strong>Perfect</strong> to present your app</h1>

                    <!-- Container colored line two -->
                    <div class="container-colored-line-two wow bounceInLeft" data-wow-offset="300">
                        
                        <!-- colored line two -->
                        <hr class="colored-line-two">
                        
                        <!-- additional colored line two -->
                        <div class="add-colored-line-two"></div>
                    </div><!-- end of container colored line two -->

                    <!-- Div #describe description -->
                    <em class="description wow fadeInDown" data-wow-delay=".3s" data-wow-offset="300">Present your app with neko.<br></em>

                    <!-- Div .container-item wraps 3 items, contains icon and text description -->
                    <div class="container-item">
                        
                        <!-- First item of div #why -->
                        <div class="item">
                            <div class="icon icon-heart wow bounceIn" data-wow-offset="400"></div>
                            <p class="item-description wow fadeInRight" data-wow-offset="400">
                                Choose your favourite layout<br>We provide 2 different layout for customization.<br>
                            </p>
                        </div><!-- end of first item -->

                        <!-- Second item -->
                        <div class="item">
                            <div class="icon icon-thumbsup wow bounceIn" data-wow-offset="350"></div>
                            <p class="item-description wow fadeInRight" data-wow-offset="350">
                                Really easy to customize<br>You can change the colors dynamically on the web.
                            </p>
                        </div><!-- end of second item -->

                        <!-- Third item -->
                        <div class="item">
                            <div class="icon icon-help wow bounceIn" data-wow-offset="300"></div>
                            <p class="item-description wow fadeInRight" data-wow-offset="300">
                                We do respect our customers<br>Feel free to ask for customizing this theme.
                            </p>
                        </div><!-- end of third item -->
                        
                        <div class="container-other-download  wow bounceInLeft" data-wow-offset="300">
                            <a href="#" class="learn">Learn more + </a>
                            <a href="#" class="get">Get App</a>
                        </div>
                        
                     </div><!-- end of div .container-item -->
                    
                </div><!-- end of div #describe - right column -->

                <!-- Container why phone wraps two mockup phones -->
                <div class="col-md-6 col-lg-6 container-phones right-column">

                    <!-- The second phone mockup -->
                    <div class="wow bounceInRight" data-wow-offset="250" data-wow-delay=".35s" data-wow-duration="1.2s">
                        <img id="describe-second-phone" class="second-phone" src="img/mockup/second-phone.png" alt="Apps mockup">
                    </div>
                    
                    <!-- The first phone mockup -->
                    <div class="wow bounceInRight" data-wow-offset="250" data-wow-duration="1.2s">
                        <img id="describe-first-phone" class="first-phone" src="img/mockup/third-phone.png" alt="Apps mockup">
                    </div>
                    
                </div><!-- end of container-phones -->

            </div><!-- end of div .row -->

          </div>
          <!-- END OF DIV #DESCRIBE -->


          <!-- ******************************************************************** -->


          <!-- BEGIN DIV #VIDEO -->
          <div id="video">
              <div class="row">
                  <div class="col-md-6 video-iframe wow fadeInLeft" data-wow-offset="300">
                    <iframe id="iframe" src="http://player.vimeo.com/video/58363288?title=0&amp;byline=0&amp;portrait=0&amp;color=3498db" width="100%" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </div>

                  <div class="col-md-6 details right-column">

                    <!-- Div #video title -->
                    <h1 class="title wow fadeInRight" data-wow-offset="300">New - <strong>Video</strong></h1>

                    <!-- Container colored line two -->
                    <div class="container-colored-line-two wow bounceInRight" data-wow-offset="300">
                        
                        <!-- Colored line two -->
                        <hr class="colored-line-two">
                        
                        <!-- Additional colored line two -->
                        <div class="add-colored-line-two"></div>
                    </div><!-- end of container colored line two -->

                    <!-- Div #why description -->
                    <em class="description wow fadeInDown" data-wow-delay=".3s" data-wow-offset="300">Now you can embed your lovely video from vimeo or youtube.</em>

                    <!-- Div .description -->
                    <div class="details-container-description">
                        
                        <p class="why-description wow fadeInRight" data-wow-offset="300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Donec ac facilisis ante. Praesent gravida tempus suscipit.<br>
                            Praesent vel sem id ligula malesuada vehicula at id orci. 
                            In sem quam, semper id fringilla sed, sodales a ante. Ut molestie a lorem in luctus.
                        </p>
                                                
                     </div><!-- end of div .description -->
                  </div>
              </div>
          </div>

          
          <!-- ******************************************************************** -->
      

          <!-- BEGIN DIV #TESTIMONIALS -->
          <div class="testimonials" id="testimonials">

              <div class="background-solid">

                  <div class="row">

                      <div class="col-md-12 col-lg-12">

                        <!-- Begin div #owl-container-services -->				  
                        <div id="owl-container-testimonials" class="owl-carousel">

                              <!-- First item carousel -->
                              <div class="item">
                                  
                                  <!-- Container quotes wraps profile photo, name, and quote -->
                                  <div class="container-quotes">
                                      
                                    <!-- Profile photo -->
                                    <img class="profile" src="img/people/1.png" alt="people">
                                      
                                    <!-- Div .quotes -->
                                    <div class="quotes">

                                        <!-- quote left icon -->
                                        <sup class="fa fa-quote-left"></sup>
                                        
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        
                                        <!-- quote right icon -->
                                        <sup class="fa fa-quote-right"></sup>

                                    </div><!-- end of quotes -->
                                      
                                    <!-- Profile name -->
                                    <h3 class="profile-name">togar natio</h3>
                                      
                                    <!-- Profession -->
                                    <cite>web designer</cite>
                                      
                                  </div><!-- end of container quotes -->
                                  
                              </div><!-- end of first item carousel -->

                              <!-- Second item carousel -->
                              <div class="item">
                                  
                                  <div class="container-quotes">
                                    <img class="profile" src="img/people/2.png" alt="people">
                                      
                                    <div class="quotes">
                                        <sup class="fa fa-quote-left"></sup>
                                        Ut enim ad minim veniam, quis nostrud exercitation<br>
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        <sup class="fa fa-quote-right"></sup>

                                    </div>
                                      
                                    <h3 class="profile-name">abdurrahman</h3>
                                    <cite>web developer</cite>
                                  </div>
                                  
                              </div><!-- end of Second item carousel -->

                              <!-- Third item carousel -->
                              <div class="item">
                                  
                                  <div class="container-quotes">
                                    <img class="profile" src="img/people/3.png" alt="people">
                                      
                                    <div class="quotes">
                                        <sup class="fa fa-quote-left"></sup>
                                        Duis aute irure dolor in reprehenderit in<br>
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        <sup class="fa fa-quote-right"></sup>
                                    </div>
                                      
                                    <h3 class="profile-name">yona sinaga</h3>
                                    <cite>mobile designer</cite>
                                  </div>  
                                  
                              </div><!-- end of Third item carousel -->

                          </div>
                          <!-- end div #owl-container-services -->

                      </div>
                  </div>

              </div>		  			  			  
              <!-- end of div .background-solid -->

          </div>
          <!-- END OF DIV #TESTIMONIALS -->      


          <!-- ******************************************************************** -->
        

          <!-- Div #screenshot-describe is the fake id that we use to jump when we click menu on top-navbar -->
          <div id="screenshot-target"></div>

          <!-- BEGIN DIV #SCREENSHOT -->
          <div id="screenshot">

              <!-- Div #screenshot title -->
              <h1 class="wow bounceIn" data-wow-offset="100">Screenshots</h1>

              <!-- Container colored line -->
              <div class="container-colored-line wow bounceIn" data-wow-offset="200">

                  <!-- Colored line -->
                  <hr class="colored-line">

                  <!-- Additional colored line -->
                  <div class="add-colored-line"></div>

              </div><!-- end of div .container-colored-line -->
              
              <!-- Div #screenshot description -->
              <em class="wow fadeInDown" data-wow-offset="200">Responsive carousel handles your screenshots.</em>	  

              <div class="container">

                  <!-- Screenshot main container, using owl carousel and nivo lightbox -->
                  <div id="owl-container-screenshot" class="owl-carousel">
                      
                    <!-- Div #screenshot item -->
                      
                    <!-- Item one -->
                    <div class="item">
                        <a class="item" href="img/ss/1.png" data-lightbox-gallery="gallery1">
                            
                            <!-- Put image screenshots here -->
                            <img src="img/ss/1.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item one -->

                    <!-- Item two -->
                    <div class="item">
                        <a href="img/ss/2.png" data-lightbox-gallery="gallery1">
                            
                            <img src="img/ss/2.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item two -->

                    <!-- Item three -->
                    <div class="item">
                        <a href="img/ss/3.png" data-lightbox-gallery="gallery1">
                            
                            <img src="img/ss/3.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item three -->
                      
                    <!-- Item four -->
                    <div class="item">
                        <a href="img/ss/1.png" data-lightbox-gallery="gallery1">
                            
                            <img src="img/ss/1.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item four -->
                    
                    <!-- Item five -->
                    <div class="item">
                        <a href="img/ss/2.png" data-lightbox-gallery="gallery1">
                            
                            <img src="img/ss/2.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item five -->

                    <!-- Item six -->
                    <div class="item">
                        <a href="img/ss/3.png" data-lightbox-gallery="gallery1">
                            
                            <img src="img/ss/3.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item six -->
                      
                    <!-- Item seven -->
                    <div class="item">
                        <a href="img/ss/1.png" data-lightbox-gallery="gallery1">
                            
                            <img src="img/ss/1.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item seven -->

                    <!-- Item eigth -->
                    <div class="item">
                        <a href="img/ss/2.png" data-lightbox-gallery="gallery1">
                            
                            <img src="img/ss/2.png" alt="Screenshot Image">
                        </a>
                    </div><!-- end of item eigth -->


                  </div><!-- end of div ."owl-container-screenshot -->
                  
              </div>

          </div>
          <!-- END OF DIV #SCREENSHOT -->
          
      
          <!-- ******************************************************************** -->


          <!-- BEGIN DIV #SERVICES -->
          <div id="services">

            <!-- Div #services title -->
              <h1 class="wow bounceIn" data-wow-offset="100">New - <strong>Services</strong></h1>

              <!-- Container colored line -->
              <div class="container-colored-line wow bounceIn" data-wow-offset="200">

                  <!-- Colored line -->
                  <hr class="colored-line">

                  <!-- Additional colored line -->
                  <div class="add-colored-line"></div>

              </div><!-- end of div .container-colored-line -->
              
              <!-- Div #screenshot description -->
              <em class="wow fadeInDown" data-wow-offset="200">What! This template also has services section!</em>

            <div class="container-services row">

              <div class="col-md-4">
                <div class="services-icon icon-heart wow bounceIn" data-wow-offset="300">
                </div>
                <p class="services-detail wow fadeInLeft" data-wow-offset="300">
                  Just little description.<br>
                  Excepteur sint occaecat cupidatat non
                  proident<br> sunt in culpa qui officia.
                </p>
              </div>

              <div class="col-md-4">
                <div class="services-icon icon-eye wow bounceIn" data-wow-offset="350">
                </div>
                <p class="services-detail wow fadeInLeft" data-wow-offset="350">
                  Just little description.<br>
                  Ut enim ad minim veniam,
                  quis nostrud<br> exercitation ullamco laboris.
                </p>
              </div>

              <div class="col-md-4">
                <div class="services-icon icon-sun2 wow bounceIn" data-wow-offset="400">
                  <div class="effect"></div>
                </div>
                <p class="services-detail wow fadeInLeft" data-wow-offset="400">
                  Oh look! You also got this lovely effect!<br>
                  Duis aute irure dolor in
                  cillum dolore<br> eu fugiat nulla pariatur.
                </p>
              </div>

            </div>

          </div>
          <!-- END OF DIV #SERVICES -->

      
          <!-- ******************************************************************** -->

          
          <!-- Div #downloads-describe is the fake id that we use to jump when we click menu on top-navbar -->
          <div id="downloads-target"></div>
      
          <!-- BEGIN DIV #DOWNLOADS -->
          <div id="downloads">
              
              <div class="background-solid">
                  
                  <h1 class="wow bounceIn" data-wow-offset="100">Get it <strong>now</strong>!</h1>
              
                  <div class="container-downloads wow fadeInUp" data-wow-offset="100">
                      
                      <p class="centering">
                          <a href="#" target="_blank" class="windows">
                            <img src="img/buttons/windows-store.png" alt="Windows store button">
                          </a>
                      </p>
                      
                      <span class="other">or</span>

                      <p class="centering">
                          <a href="#" target="_blank" class="android">
                            <img src="img/buttons/google-play.png" alt="Google play button">
                          </a>
                      </p>
                   </div>
                  
              </div>
              
          </div>


          <!-- ******************************************************************** -->


          <!-- BEGIN DIV #PRICING-TABLE -->
          <div id="pricing-table">
          
            <!-- Div #pricing-table title -->
            <h1 class="wow bounceIn" data-wow-offset="100">New - <strong>Pricing Table</strong></h1>

            <!-- Container colored line -->
            <div class="container-colored-line wow bounceIn" data-wow-offset="200">

                  <!-- Colored line -->
                  <hr class="colored-line">

                  <!-- Additional line -->
                  <div class="add-colored-line"></div>

            </div><!-- end of div .container-colored-line -->

            <!-- Div #pricing-table description -->
            <em class="description wow fadeInDown" data-wow-offset="200">Now you have responsive pricing table.</em>

            <div class="container-table">
            
              <!-- table 1 -->
              <div class="pricing wow fadeInRight table-1" data-wow-offset="400" data-wow-delay=".2s">
                <h3>Personal</h3>
                <div class="price-container row">
                  <div class="col-md-12 dollar">$50</div>
                  <div class="col-md-12 per-month">/ MONTH</div>
                </div>
                <em class="detail-price">Little description about this.</em>
                <ul class="price-features">
                  <li>
                    <span class="feature">Feature #1</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #2</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #3</span>
                    <span class="cross icon-cross"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #4</span>
                    <span class="cross icon-cross"></span>
                  </li>
                </ul>
                <a class="order" href="#">Order Now!</a>
              
              </div><!-- end of table 1 -->

              <!-- table 2 -->
              <div class="pricing wow bounceIn" data-wow-offset="300">
                <h3>Proffesional</h3>
                <div class="price-container row">
                  <div class="col-md-12 dollar">$80</div>
                  <div class="col-md-12 per-month">/ MONTH</div>
                </div>
                <em class="detail-price">Little description about this.</em>
                <ul class="price-features">
                  <li>
                    <span class="feature">Feature #1</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #2</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #3</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #4</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                </ul>
                <a class="order" href="#">Order Now!</a>
              
              </div><!-- end of table 2 -->

              <!-- table 3 -->
              <div class="pricing wow fadeInLeft table-3" data-wow-offset="400" data-wow-delay=".2s">
                <h3>Business</h3>
                <div class="price-container row">
                  <div class="col-md-12 dollar">$60</div>
                  <div class="col-md-12 per-month">/ MONTH</div>
                </div>
                <em class="detail-price">Little description about this.</em>
                <ul class="price-features">
                  <li>
                    <span class="feature">Feature #1</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #2</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #3</span>
                    <span class="check icon-checkmark"></span>
                  </li>
                  <li>
                    <span class="feature">Feature #4</span>
                    <span class="cross icon-cross"></span>
                  </li>
                </ul>
                <a class="order" href="#">Order Now!</a>
              
              </div><!-- end of table 3 -->

            </div>
          
          </div>
          <!-- END OF DIV ##PRICING-TABLE -->
          

          <!-- ******************************************************************** -->
          
          
          <!-- Div #contact-describe is the fake id that we use to jump when we click menu on top-navbar -->
          <div id="contact-target"></div>
          
          <!-- BEGIN DIV #CONTACT -->
          <div id="contact">
              
              <!-- Div #contact title -->
              <h1 class="wow bounceIn" data-wow-offset="100">Get in <strong>touch</strong></h1>

              <!-- Container colored line -->
              <div class="container-colored-line wow bounceIn" data-wow-offset="200">

                  <!-- Colored line -->
                  <hr class="colored-line">

                  <!-- Additional line -->
                  <div class="add-colored-line"></div>

              </div><!-- end of div .container-colored-line -->

              <!-- Div #contact description -->
              <em class="wow fadeInDown" data-wow-offset="200">Let us know what you think about us.</em>

              <!-- Begin form. You can change the action attribute to your PHP file name -->
              <form action="https://balapastudio.co/neko/solid-bg/top-bar/send.php" method="post" id="contact-form" class="contact-form wow bounceIn" data-wow-offset="200">
                  
                  <!-- Input name -->
                  <div class="col-md-6 col-lg-6">
                    <input type="text" name="name" placeholder="Name" required>
                  </div>
                  
                  <!-- Input email -->
                  <div class="col-md-6 col-lg-6">
                    <input type="email" name="email" placeholder="Email Address" required>
                  </div>
                  
                  <!-- Input subject -->
                  <div class="col-md-12 col-lg-12 col-sm-12">
                    <input type="text" name="subject" placeholder="Subject" required>
                  </div>
                  
                  <!-- Input message --> 
                  <div class="col-md-12 col-lg-12 col-sm-12">
                    <textarea name="message" placeholder="Your message" required></textarea>
                  </div>
                  
                  <!-- Input submit -->
                  <p>
                    <input type="submit" name="submit" value="Send Message">
                  </p>
                  <input type="hidden" name="submitted" value="true">
              </form>
              <!-- end of form -->

          </div>
          <!-- END OF DIV #CONTACT -->
          
      
          <!-- ******************************************************************** -->


          <!-- BEGIN FOOTER -->
          <footer>
                  
            <div class="col-m-12 col-lg-12">
                      
                <!-- Div #subscribe title -->
                <h1 class="wow bounceIn" data-wow-offset="100">Subscribe <strong>now</strong>!</h1>

                    <!-- Container colored line -->
                    <div class="container-colored-line wow bounceIn">
                              
                        <!-- colored line -->
                        <hr class="colored-line">

                        <!-- Additional line -->
                        <div class="add-colored-line white-line"></div>

                    </div><!-- end of Container colored line -->

                    <!-- Div #subscribe description -->
                    <em class="wow fadeInDown">We're not ready yet. We'll email<br>you when we are ready.</em>

                    <!--  This is form tag. You can change the action attribute to your PHP file name
                            This tag also wrapper the email input and send button.
                    -->
                      
                    <form id="subscribe" action="https://balapastudio.co/neko/solid-bg/top-bar/subscribe.php" class="input-wrapper wow bounceIn" method="POST">
                          
                        <em class="subscribe-success">Thank you, we'll be in touch. <span class="icon-checkmark"></span></em>
                          
                        <input type="email" name="email" class="email" placeholder="Your email address" required>
                        <input type="submit" class="subscribe" value="Notify Me">
                        <input type="hidden" name="submitted" value="true">
                        
                    </form>
                      
            </div>
                    
            <!-- Form description -->
            <p class="promise wow fadeInDown">We promise we won't spam you</p>
              
            <div class="container-socmed wow fadeInUp" data-wow-offset="50">
                <ul class="socmed">
                    <li><a href="#" class="fa fa-facebook" title="Facebook"></a></li>  
                    <li><a href="#" class="fa fa-twitter" title="Twtitter"></a></li>  
                    <li><a href="#" class="fa fa-github-alt" title="Github"></a></li>  
                    <li><a href="#" class="fa fa-linkedin" title="Linkedin"></a></li>  
                    <li><a href="#" class="fa fa-reddit" title="Reddit"></a></li>  
                </ul>
                <p class="footer-detail">&copy; 2014, Neko &bull; All Rights Reserved</p>
            </div>
          
          </footer>
          <!-- END OF FOOTER -->
          
      </div>
      <!-- END OF DIV #MAIN-CONTENT -->
    
    
      <!-- ******************************************************************** -->
    
      
      <!--  COLOR SWITCHER . FOR DEMO ONLY. NOT INCLUDED TO MAIN FILES -->
      <div class="color-switcher fade out">
          <div id="gear" class="icon-tools fade out" title="Setting"></div>
          <div class="container-setting">
              <p class="setting">Setting</p>
              <p class="title">Color Scheme</p>
              <div class="container-color-list">
                  <ul class="color-list">
                    <li rel="blue" class="styleswitch blue"></li>
                    <li rel="green" class="styleswitch green"></li>
                    <li rel="purple" class="styleswitch purple"></li>
                    <li rel="yellow" class="styleswitch yellow"></li>
                  </ul>
                  <ul class="color-list">
                    <li rel="red" class="styleswitch red"></li>
                    <li rel="orange" class="styleswitch orange"></li>
                    <li rel="brown" class="styleswitch brown"></li>
                    <li rel="pink" class="styleswitch pink"></li>
                  </ul>
              </div>
                  <p class="title">Layout</p>
                  <ul class="layout-list">
                    <li><a href="https://balapastudio.co/neko/solid-bg/sidebar/index.html">Sidebar Navigation</a></li>
                  </ul>
          </div>
      </div>
      <!-- END COLOR SWITCHER -->
	  
    
      <!-- ******************************************************************** -->
	  
	  
	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      
	  <script src="js/jquery.min.js"></script>
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="vali.js"></script>
      <script src="js/jquery.easing.min.js"></script>
	  <script src="js/jquery.scrollTo.min.js"></script> <!-- plugin to scroll smoothly to a section when an has element triggered -->
	  <script src="js/wow.min.js"></script> <!-- plugin to reveal animation when scrolling -->
	  <script src="js/nivo-lightbox.min.js"></script> <!-- plugin to create a slideshow when you click on screenshot image -->
	  <script src="js/owl.carousel.js"></script> <!-- plugin to create a carousel -->
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/switcher.js"></script>
	  <script src="js/waypoints.min.js"></script> <!-- plugin to detect browser viewport. -->
	  <script src="js/smoothScrolls.js"></script> <!-- plugin to make browser scroll smoothly -->
	  <script src="js/jquery.stellar.min.js"></script> <!-- plugin to create parallax effect on backgroung image -->
	  <script src="js/nprogress.js"></script> <!-- plugin to create progress animation when web on loading -->
	  <script src="js/main.js"></script> <!-- plugin to create progress animation when web on loading -->
	  <script src="js/ajax.js"></script> <!-- plugin to create progress animation when web on loading -->
      <!--<script type="text/javascript">
		<!--
		/*
		Credits: Bit Repository
		Source: http://www.bitrepository.com/web-programming/ajax/username-checker.html
		*/
		 
		pic1 = new Image(16, 16);
		pic1.src="loader.gif";
		 
		$(document).ready(function(){
		 
		$(".signup input.username").change(function() {
		 
		var usr = $(".signup input.username").val();
		 
		if(usr.length >= 4)
		{
		$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
		 
			$.ajax({ 
			type: "POST", 
			url: "check.php", 
			data: "username="+ usr, 
			success: function(msg){ 
			
		   $("#status").ajaxComplete(function(event, request, settings){
		 
			if(msg == 'OK')
			{
				$(".signup input.username").removeClass('object_error'); // if necessary
				$(".signup input.username").addClass("object_ok");
				$(this).html('&nbsp;<img src="tick.gif" align="absmiddle">');
			} 
			else 
			{ 
				$(".signup input.username").removeClass('object_ok'); // if necessary
				$(".signup input.username").addClass("object_error");
				$(this).html(msg);
			} 
			
		   });
		 
		 }
			
		  });
		 
		}
		else
			{
			$("#status").html('<font color="red">' +
		'The username should have at least <strong>4</strong> characters.</font>');
			$(".signup input.username").removeClass('object_ok'); // if necessary
			$(".signup input.username").addClass("object_error");
			}
		 
		});
		 
		});
		 
		
		 
		</script>-->
       
        <!--<script type="text/javascript">
		$(document).ready(function(){
		$("#submit").click(function(){
		var email=$('.email').val();
		var name=$('.fullname').val();
		var phone=$('.phone').val();
		if(email.length>0 && name.length>0 && phone.length>0) {
		$.ajax({
		type: "POST",
		url: "ajax.php",
		data: "email="+email+"&name="+name+"&phone="+phone ,
		success: function(html){
		$("#load").css('display','block');
		$("#box").css('display','none');
		$("#load").fadeOut('500', function(){
		$("#load").css('display','none');
		$("#box").html(html).show('slow');
		});
		}
		});
		}
		return false;
		});
		});
		</script>-->
	  
  </body>

<!-- Mirrored from balapastudio.co/neko/solid-bg/top-bar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 10:38:12 GMT -->
</html>