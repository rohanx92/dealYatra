<?php
include("db.php");
session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

$result=mysqli_query($db,"SELECT * FROM users WHERE email='$username' and password='$password' AND active='1'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if ($count == 1) {
$_SESSION['login_user']=$row['uid'];
  $uid = $row['uid'];
  $email= $row['email'];
    $sql = "INSERT INTO users_logins (uid, email) VALUES ('$uid', '$username')";
  if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }
  echo $row['uid'];
}
}

?>