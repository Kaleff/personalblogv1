<?php
    require_once "includes/db.php";
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
    <?php include_once "includes/header.php";?>
    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="/articles.php">All Articles</a>
              <h3>New articles</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
                    <?php
                        $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `category_id` != 4 ORDER BY `id` DESC LIMIT 10");

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
          <?php foreach($categoriesById as $categoryId=>$categoryName) { ?>
            <div class="block">
              <a href="/articles.php?category=<?php echo $categoryId ?>">Related Articles</a>
              <h3><?php echo $categoryName." [Newest]"; ?></h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
                    <?php
                    $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `category_id` = $categoryId ORDER BY `id` DESC LIMIT 10");
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
            <?php } ?>
          </section>
          <section class="content__right col-md-4">
            <?php include_once "includes/sidebar.php";?>
          </section>
        </div>
      </div>
    </div>
    <?php include_once "includes/footer.php";?>
  </div>

</body>
</html>