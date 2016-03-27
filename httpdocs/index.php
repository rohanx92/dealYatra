<?php
session_start();
if(!empty($_SESSION['login_user']))
{
header('Location: member.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta name="description" content="Best Deals at One place">
    <meta name="keywords" content="Deals,Snapdeal, Flipkart, Amazon">
    <meta name="author" content="DealYatra">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <!-- Add title to your website -->
    <title>Deal Yatra</title>

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
                    <h1>Deal Yatra is your <strong>gateway</strong> to<br> the best deals at one place.</h1>
                      <section>
<p class="join_header"><strong>HOW TO SAVE AND EARN </strong> <i>Bachao aur kamao</i></p>
<p class="join_points">1. JOIN US THROUGH A REFERRER or MASTER FRANCHISEE</p>
<p class="join_points">2. VISIT RETAILERS VIA DEALYATRA &amp; SHOP</p>
<p class="join_points">3. EARN CASHBACK</p>
<p class="join_points">4. REFER FRIEND AND EARN HANDSOME REFERRAL INCOME</p>
<p class="join_points">5. TRANSFER TO BANK</p>
<p class="join_points"> For more details contact our master franchisee <i>idealequations@dealyatra.com</i></p>
</section>

                    <!-- #Home description 
                    <h5>Available on App store, Windows store and Play store.</h5>

                    The download button container makes the download button to be centered 
                    <div class="download-button-container">
                        
                        - Download button 
                        <p class="centering">
                            <a class="download-button" href="#" target="_blank">
                                <img src="img/buttons/app-store.png" alt="App store button">
                            </a><!-- End of download button 
                        </p>
                        
                        <p class="centering">
                            <a class="other" href="#downloads-target">Other downloads?</a>
                        </p>
                      
                    </div> End of download button container -->
                      
                  </div>
                      
                  <!-- Div #home .right-column -->
                  <div class="col-md-6 col-lg-6 right-column" data-wow-delay="2s">

                      <form class="login">
                        <label>Email</label>
                        <input class="username" type="text" placeholder="Email" id="username">

                        <label>Password</label>
						  <input class="password" type="password" placeholder="Password" id="password">
                      <p class="righting">
                      <span class="login-description">Need an account?
                          <span id="signup-button" class="login-button">Sign up</span>
                      </span>
                      <input type="submit" value="Login" id="login">
                      </p>
						   
						<div id="error">
						
						</div>
                      </form>
                  
                  </div><!-- end of div #home .right-column -->

                </div><!-- end of div .background-solid -->
                  
                  
              </div><!-- end of div .row -->

          <!-- END OF DIV #HOME -->

      
          <!-- ******************************************************************** -->


          <!-- Div #features-target is the fake id that we use to jump when we click menu on top-navbar -->
          

         
          
          
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
                <p class="footer-detail">&copy; 2015, Deal Yatra &bull; All Rights Reserved</p>
            </div>
          
          </footer>
          <!-- END OF FOOTER -->
          
      </div>
      <!-- END OF DIV #MAIN-CONTENT -->
    
    
      <!-- ******************************************************************** -->
    
      
      <!--  COLOR SWITCHER . FOR DEMO ONLY. NOT INCLUDED TO MAIN FILES 
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
	  <script>
			$(document).ready(function() {
			
			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
            $("body").load("member.php").hide().fadeIn(1500).delay(6000);
            }
            else
            {
             $("#login").val('Login');
			       $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username/password or activate your account. ");
            }  
            }
            });
			
			}
			return false;
			});
			
				
			});
		</script>
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