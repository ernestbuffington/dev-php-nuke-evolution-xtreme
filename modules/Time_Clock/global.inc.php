<?php

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    die( 'We don\'t have mysqli, which is required to run this program. Please contact Administrator');
}

$host ="localhost:3306";
$user = "myuser";
$password = "mysql";
$database = "mydb";
$mysqli = new mysqli($host, $user, $password, $database);


/**** check connection ****/
if ($mysqli->connect_errno) {
    
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    
}

?>
