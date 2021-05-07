<?php
include_once "config.php";
?>

<footer id="footer">
    <div class="container">
        <div class="footer__logo">
            <h1><?php echo $config['title']; ?></h1>
        </div>
        <nav class="footer__menu">
            <ul>
                <li><a href="/">Main Page</a></li>
                <li><a href="/pages/about_me.php">About Me & Contact Information</a></li>
                <li><a target="_blank" href="<?php Echo $config['LI_url']; ?>">My LinkedIn</a></li>
            </ul>
        </nav>
    </div>
</footer>
