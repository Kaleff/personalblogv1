<?php
$localhost = "127.0.0.1";
$dbUserName = "root";
$dbPassWord = "root";
$dbName = "test_db";
$connection = mysqli_connect($localhost, $dbUserName, $dbPassWord, $dbName);
if(!$connection)
{
    echo "Connection error <br>";
    echo mysqli_connect_error();
    die();
}
else {
    echo "We good <br>";
}