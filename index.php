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


/*
else
{
    echo "We good <br>";
}

$result = mysqli_query($connection,"SELECT * FROM `articles_categories`");
?>
<ul>
    <?php
        while ( ($recording = mysqli_fetch_assoc($result)))
        {
            $articles_count = mysqli_query($connection,"SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categorie_id` = " . $recording['id'] ); // CHOOSES ALL ARTICLES WITH SPECIFIC Category ID, AND COUNTS THEM LEAVING RESULT IN `total_count`
            $articles_count_result = mysqli_fetch_assoc($articles_count); // becomes a query with one row - `total_count`
            echo "<li>". $recording['title'] . ' ('. $articles_count_result['total_count']. ")</li>";
        }
    ?>
</ul>
<?php
mysqli_close($connection);

*/
?>
