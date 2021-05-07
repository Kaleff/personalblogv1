<?php
    include_once "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? echo $config['title']?></title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

<div id="wrapper">
    <?php include_once "../includes/header.php"?>
    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">
                        <h2>About Me</h2>
                        <div class="block__content">
                            <img src="/static/images/authorpic.jpg" style="max-width: 50%; max-height: 50%; position: relative; left:25%;">

                            <div class="full-text">
                                <h2>About</h2>
                                <p>
                                    I'm a beginner in Software Developer specialty. <br>
                                    My main skills are PHP (OOP and MVC included) and MySQLi. <br>
                                    Additionally I have intermediate understanding of HTML, CSS and JavaScript. <br>
                                    More information on programming skills could be found in <a href="../articles.php?category=1">this section<a>
                                </p>

                                <h2>Looking for employment</h2>
                                <p>For the time being I look for the Junior PHP-developer job, as you may already guessed since this website was included in my Curriculum Vitae</p>

                                <h2>Contact Information</h2>
                                <p>If you have any questions or offers, please use following contact information: <br>
                                    E-mail: markskalijevs@gmail.com <br>
                                    Or my <a href="<?php echo $config['LI_url']; ?>">LinkedIn.</a>
                                </p>
                            </div>
                        </div>
                    </div>



                </section>
                <section class="content__right col-md-4">
                    <?php include_once "../includes/sidebar.php" ?>
                </section>
            </div>
        </div>
    </div>

    <?php include_once "../includes/footer.php"; ?>

</div>

</body>
</html>
