<?php

$SERVERNAME = getenv('HELM_HELM1_PHPMYSQL_SERVICE_HOST');

define('DB_SERVER', $SERVERNAME);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass');
define('DB_NAME', 'emp_demo_database');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
