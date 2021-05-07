<?php
?>
<div class="block">
    <h3>About this Blog </h3>
        <!-- <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
        -->
    <div class="block__content">
        <div style="line-height: 1.7; font-size:18px;">
            This is my personal Blog website. <br>
            The purpose of this Blog is to showcase personal PHP and MySQLi skills to the future potential employer.
            This Website is based on open-source HTML/CSS template. <br>
            Also this Website hosts articles of my opinion on certain topics.
        </div>
    </div>
</div>

<div class="block">
    <h3>Most Viewed Articles</h3>
    <div class="block__content">
        <div class="articles articles__vertical">

            <?php
            $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 5");
            while ($artic = mysqli_fetch_assoc($articles) ) {
                ?>
                <article class="article">
                    <div class="article__image" style="background-image: url(/static/images/<?php echo $artic['image']; ?>);"></div>
                    <div class="article__info">
                        <a href="/article.php?id=<?php echo $artic['id'];?>"><?php echo $artic['title'];?></a>
                        <div class="article__info__meta">
                            <small>Category: <a href="/articles.php?category=<?php echo $artic['category_id']; ?>"><?php echo $categoriesById[$artic['category_id']];?></a></small>
                        </div>
                        <div class="article__info__preview">
                            <?php
                            if(strlen($artic['text'])>130) {
                                echo mb_substr(strip_tags($artic['text']), 0, 130, "utf-8")."...";
                            }
                            else {
                                echo $artic['text'];
                            }
                            ?>
                        </div>
                    </div>
                </article>
                <?php
            }
            ?>

        </div>
    </div>
</div>