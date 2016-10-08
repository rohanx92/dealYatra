<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
exit();
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
	  
    <!-- Connect the html files to css files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/entypo.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/nivo-lightbox.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/color-switcher.css" rel="stylesheet">
         
    <!-- Favicon
    <link rel="icon" type="image/png" href="img/favicon.png">
 -->
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

	<div class="col-md-6 col-lg-6 left-column" style="margin-top:20px">
	    <form action="javascript:void(0);" onSubmit="changePassword()">
		<input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['login_user']?>">
	    	<p>
		        <label>Old Password</label>
		        <input class="password" type="password" placeholder="Old password" id="password_old" required>
		    </p>
	        <p>
		        <label>New Password</label>
		        <input class="password" type="password" placeholder="New Password" id="password_new" required>
			</p>
			<p>
				<label>Confirm Password</label>
		   		<input class="password" type="password" placeholder="Confirm Password" id="password_confirm" required>
	        </p>
	        <p>
	        	<input type="submit" value="submit" id="change_pwd">
	        </p>				   
			<div id="error">
							
			</div>
	    </form>            
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> <!-- plugin to create progress animation when web on loading -->
<script>
	function changePassword() {
		$("#error").html("");
		var userId = $("#user_id").val();
		var password=$("#password_old").val();
		var newPassword = $("#password_new").val();
		var confPassword=$("#password_confirm").val();
		if(password.length == 0 || newPassword.length == 0 || confPassword.length == 0) {
			return;
		}
		if(newPassword != confPassword) {
			alert('Please enter confirm password same as new password');
			$("#password_confirm").focus();
			return;
		}
		if(!validatePassword(newPassword)) {
			$("#password_new").focus();
			return;
		}
		var dataString = 'user_id='+userId+'&password_old='+password+'&password_new='+newPassword;
		$.ajax({
	       	type: "POST",
		    url: "ajaxChangePassword.php",
		    data: dataString,
		    cache: false,
		    dataType: 'json',
		    error: function(xhr, status, error) {
				var errorData = jQuery.parseJSON(xhr.responseText);
	            $("#error").html("<span style='color:#cc0000'>Error:</span>"+errorData.error);
		    },
		    success : function(data) {
		    	if(data) {
	            	alert(data['message']);
	            	window.location.replace("index.php");
            	}
		    }
	    });
	}

	function validatePassword(newPassword) {
		if(newPassword.length < 6) {
        	alert("Error: Password must contain at least six characters!");
        	return false;
      	}
      	re = /[0-9]/;
      	if(!re.test(newPassword)) {
        	alert("Error: password must contain at least one number (0-9)!");
        	return false;
      	}
      	re = /[a-z]/;
      	if(!re.test(newPassword)) {
        	alert("Error: password must contain at least one lowercase letter (a-z)!");
        	return false;
      	}
      	re = /[A-Z]/;
      	if(!re.test(newPassword)) {
        	alert("Error: password must contain at least one uppercase letter (A-Z)!");
        	return false;
      	}
      	return true;
	} 			
</script>
</body>
</html>