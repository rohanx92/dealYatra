<?php
define('DB_SERVER', '172.31.9.31:3306');
define('DB_USERNAME', 'dealyatradbuser');
define('DB_PASSWORD', 'dealdb123');
define('DB_DATABASE', 'idealeq_users');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>