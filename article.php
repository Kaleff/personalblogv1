<?php
include_once "includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $config['title']; ?></title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

<div id="wrapper">
    <?php include_once "includes/header.php";
    $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = ".(int) $_GET['id']);
    if( mysqli_num_rows($article) <= 0)
    {
        ?>
        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-8">
                        <div class="block">
                            <h3>Content not found</h3>
                            <div class="block__content">
                                <div class="full-text">
                                    This article doesn't exist or was deleted.
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="content__right col-md-4">
                        <?php include_once "includes/sidebar.php" ?>
                    </section>
                </div>
            </div>
        </div>
        <?php
    }
    else {
        $artic = mysqli_fetch_assoc($article);
        mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = ".(int) $artic['id']);
    ?>
        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-8">
                        <div class="block">
                            <a><?php echo $artic['views']; ?> views</a>
                            <h2><?php echo $artic['title']; ?></h2>
                            <div class="block__content">
                                <img src="/static/images/<?php echo $artic['image'];?>" style="max-width: 50%; max-height: 50%; position: relative; left:25%;">
                                <div class="full-text"><?echo "<br>".$artic['text']?></div>
                            </div>
                        </div>
                    </section>
                    <section class="content__right col-md-4">
                        <?php include_once "includes/sidebar.php" ?>
                    </section>
                </div>
            </div>
        </div>
    <?php
    }
    include_once "includes/footer.php";
    ?>

</div>

</body>
</html>
