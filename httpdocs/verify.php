
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
      
           
      
	  <!-- BEGIN DIV #MAIN-CONTENT-->
	  <div id="main-content" class="fade out">
  	  
          <!-- BEGIN DIV #HOME -->
          <!-- end of div .row -->

          <!-- END OF DIV #HOME -->

             

        
          <!-- BEGIN DIV #DOWNLOADS -->
          <div id="downloads">
              
              <div class="background-solid">
				  <?php
					include("db.php");
					if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
						// Verify data
						$email = mysql_escape_string($_GET['email']); // Set email variable
						$hash = mysql_escape_string($_GET['hash']); // Set hash variable
									 
						$search = mysqli_query($db,"SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
						$match  = mysqli_num_rows($search);
									 
						if($match > 0){
							// We have a match, activate the account
							mysqli_query($db,"UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
							echo '<h1 class="wow bounceIn" data-wow-offset="100">Your account has been activated, you can now login</h1>';
						}else{
							// No match -> invalid url or account has already been activated.
							echo '<h1 class="wow bounceIn" data-wow-offset="100">The url is either invalid or you already have activated your account.</h1>';
						}
									 
					}else{
						// Invalid approach
						echo '<h1 class="wow bounceIn" data-wow-offset="100">Invalid approach, please use the link that has been send to your email.</h1>';
					}
					?>
                  
                  
              
                  
                  
              </div>
              
          </div>


          <!-- ******************************************************************** -->


          <!-- BEGIN DIV #PRICING-TABLE -->
          
          <!-- END OF DIV ##PRICING-TABLE -->
          

          <!-- ******************************************************************** -->
          
          
          <!-- Div #contact-describe is the fake id that we use to jump when we click menu on top-navbar -->
          
          
          <!-- BEGIN DIV #CONTACT -->
          
          <!-- END OF DIV #CONTACT -->
          
      
          <!-- ******************************************************************** -->


          <!-- BEGIN FOOTER -->
          <footer>
                  
                                
            <!-- Form description -->
            
              
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
