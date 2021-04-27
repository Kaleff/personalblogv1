<?php
include_once(dirname(__FILE__)."/components/db.php");

echo "Welcome back, ".$_POST["user_login"]."<br>";
echo "In case you forgot, your password is ".$_POST['user_password']."<br>";

$user_login =$_POST["user_login"];
$user_password =$_POST["user_password"];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `username` = '$user_login' AND `password` = '$user_password' ");
if (mysqli_num_rows($count) == 0) {
    echo "Wrong password or login";
}
else
{
    echo "Welcome, $user_login";
}