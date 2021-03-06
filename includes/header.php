<?php
include_once "db.php"; // config.php included in db.php
?>
<header id="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top__logo">
                <h1><?php echo $config['title']; ?></h1>
            </div>
            <nav class="header__top__menu">
                <ul>
                    <li><a href="/">Main Page</a></li>
                    <li><a href="/pages/about_me.php">About Me & Contact Information</a></li>
                    <li><a href="<?php echo $config['LI_url']; ?>" target="_blank">My LinkedIn</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <?php
        $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");
    ?>
    <div class="header__bottom">
        <div class="container">
            <nav>
                <ul>
                    <?php
                        while($category = mysqli_fetch_assoc($categories) )
                        {
                            $categoriesById[$category['id']] = $category['title'];
                            echo "<li><a href='/articles.php?category=".$category['id']."'>".$category['title']."</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
