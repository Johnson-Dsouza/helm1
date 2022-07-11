<?php
define('DB_SERVER', '$_SERVER["{{.Values.env.value}}"]');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass');
define('DB_NAME', 'emp_demo_database');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
