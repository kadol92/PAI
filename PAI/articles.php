<?php

session_start();
if (!isset($_SESSION['zalogowany'])) {
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php
    include_once "generateHead.php";
    ?>
</head>

<body>
<div class="container">
    <?php
    include_once "generateNav.php";
    ?>

    <div class="content">
        <?php
        if (isset($_SESSION['article_edited'])) {
            echo "<div class=\"post\">";
            echo "<h4>Wpis został zaktualizowany!</h4>";
            echo "</div>";

            unset($_SESSION['article_edited']);
        }
        else if(isset($_SESSION['article_deleted'])){
            echo "<div class=\"post\">";
            echo "<h4>Wpis został usunięty!</h4>";
            echo "</div>";

            unset($_SESSION['article_deleted']);
        }
        ?>
        <div class="post">
            <h4>Wybierz artykuł do edycji</h4>
            <div class="postContent">
                <form class="articleForm" action="edit_article.php" method="post">

                    Artykuł:
                    <select class="articleSelect" name="articleID">
                        <?php
                        include "show_added_articles.php";
                        ?>
                    </select>
                    <br/>
                    <input class="article" type="submit" name="edit_article" value="Edytuj wpis"/>
                    <input class="article" type="submit" name="delete_article" value="Usun wpis"/>
                </form>
            </div>

        </div>



    </div>
    <div class="footer"></div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>

<script>

    $(document).ready(function () {
        var stickyNavTop = $('.navConteiner').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('.navConteiner').addClass('sticky');
            } else {
                $('.navConteiner').removeClass('sticky');
            }
        };

        stickyNav();

        $(window).scroll(function () {
            stickyNav();
        });
    });

</script>

</body>
</html>