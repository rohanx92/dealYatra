<?php
include("db.php");
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$hash = md5( rand(0,1000) );
$password = rand(1000,5000);
$sql_check = mysqli_query($db,"SELECT email FROM users where email='$email'");
if (mysqli_num_rows($sql_check)>0){
	echo '1';}
else{
$query= mysqli_query($db,"INSERT INTO users (email,name,phone,password,hash) VALUES('$email','$name','$phone','". mysql_escape_string(md5($password)) ."','". mysql_escape_string($hash) ."')");}
$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$email.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://www.dealyatra.com/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:noreply@dealyatra.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
}
?>