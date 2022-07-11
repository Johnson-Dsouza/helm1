<?php
define('DB_SERVER', 'helm1-1657527067-phpmysql');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass');
define('DB_NAME', 'emp_demo_database');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
