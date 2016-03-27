<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from balapastudio.co/neko/solid-bg/top-bar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 10:38:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="Best Deals at One place">
    <meta name="keywords" content="Deals,Snapdeal, Flipkart, Amazon">
    <meta name="author" content="DealYatra">
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
    
  <body style="background-color:#3498db;">
      
      <!-- Message notification -->
     
      
	  <!-- BEGIN DIV #TOP-NAVBAR -->
	  <nav class="navbar navbar-default navbar-fixed-top fade out" role="navigation">
	  
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
				<li class="nav-logout"><a style="padding:0px;" href="logout.php">Logout</a></li>
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
              <div class="row row-centered background-solid">
              <div class="col-md-6 col-md-offset-3">
				  <a href="http://www.flipkart.com/?affid=idealequa"  target="_blank" style="text-decoration: none"><div class="well" style="background-color:#fdd922">
                      <h2 style="color:#027cd5">FLIPKART DEALS</h2>
                      
					  </div></a>
				  
                   <a href="http://www.snapdeal.com/?aff_id=(73479)" target="_blank" style="text-decoration: none"> <div class="well">
                      <h2 style="color:#0d99ce;">SNAP<span style="color:#bb1517;">DEAL</span></h2>
                      
					   </div></a>
				  
                  <a href="http://www.makemytrip.com/" target="_blank" style="text-decoration: none"><div class="well">
                      <img style="display: block; margin-right: auto;  margin-left: auto;" src="http://dealyatra.com//img/makemytrip.png" border="0" alt="In Association with Amazon.in">
                      
					  </div></a>
				  
				  <a href="http://www.Amazon.in/exec/obidos/redirect-home?tag=wwwdealyatr0b-21&placement=home_multi.gif&site=amazon" target="_blank">
					  <div class="well"> <img style="display: block; margin-right: auto;  margin-left: auto;" src="http://g-ec2.images-amazon.com/images/G/31/associates/promohub/amazonIN_logo_200_75.jpg?tag-id=wwwdealyatr0b-21" border="0" alt="In Association with Amazon.in"></div>
</a>
                    
                  </div>
                      
                  </div>
                      
                  <!-- Div #home .right-column -->
                  

                <!-- end of div .background-solid -->
                  
                  
              </div><!-- end of div .row -->
              
              

          <!-- END OF DIV #HOME -->

      
          <!-- ******************************************************************** -->


          <!-- Div #features-target is the fake id that we use to jump when we click menu on top-navbar -->
         
          
      </div>
      <!-- END OF DIV #MAIN-CONTENT -->
    
    
      <!-- ******************************************************************** -->
    
      
      <!--  COLOR SWITCHER . FOR DEMO ONLY. NOT INCLUDED TO MAIN FILES -->
      	  
    
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
      <script src="flip.js"></script>
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