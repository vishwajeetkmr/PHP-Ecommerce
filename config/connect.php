<?php 

$connection = mysqli_connect('localhost', 'root', '', 'phpecom');
if(!$connection){
    echo "Error: Unable to connect to MYSQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno(). PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_error(). PHP_EOL;
    exit;
}

?>