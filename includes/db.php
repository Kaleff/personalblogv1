<?php
require_once "config.php";

$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);

if(!$connection){
    echo "Connection to Database unsuccessful <br>";
    echo mysqli_connect_error();
    die();
}