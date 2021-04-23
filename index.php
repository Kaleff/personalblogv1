<?php
define('ROOT',dirname(__FILE__));
echo ROOT.'<br>';
include_once(ROOT."/components/db.php");

?>
<form method="post" action="/handler.php">
    <input type="text" placeholder="Your login" name="user_login">
    <input type="text" placeholder="Your password" name="user_password">
    <hr>
    <input type="submit" value="Sing In">

</form>