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
//echo "Today is ".date("d.m.Y")." and time is ".date("H:i:s")."<br>";

$start_date = "2001-08-12 10:00:00";
$start_date_timestamp = strtotime($start_date);

$diff = time()-$start_date_timestamp;
$days_passed = floor((($diff / 60) / 60) / 24);
echo $days_passed."<br>";
echo "Since my Birth date: " . date("d.m.Y", $start_date_timestamp) . " and current day " . date("d.m.Y") . " " .$days_passed . " days passed";