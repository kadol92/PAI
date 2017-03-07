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
        if (isset($_SESSION['show_priview'])) {
            unset($_SESSION['show_priview']);
            echo $_SESSION['priview_article'];
        }
        ?>
        <div class="post">
            <?php
            if (isset($_SESSION['article_added'])) {
                echo "<div class=\"post\">";
                echo "<h4>Wpis został dodany!</h4>";
                echo "</div>";

                unset($_SESSION['article_added']);
            }
            ?>
            <h4>Dodaj nowy wpis</h4>
            <div class="postContent">
                <form class="articleForm" action="addArticleToDB.php" method="post">

                    Tytuł: <input class="article" type="text" name="articleTitle" value="<?php
                    if(isset($_SESSION['title_priview'])){
                        echo $_SESSION['title_priview'];
                        unset($_SESSION['title_priview']);
                    }

                    ?>"><br/>
                    Kategoria:
                    <select class="article" name="category">
                        <option <?php
                        if(isset($_SESSION['category_priview']) && $_SESSION['category_priview'] == "Film"){
                            unset($_SESSION['category_priview']);
                            echo "selected=\"selected\"";
                        }
                        ?>>Film</option>
                        <option <?php
                        if(isset($_SESSION['category_priview']) && $_SESSION['category_priview'] == "Serial"){
                            unset($_SESSION['category_priview']);
                            echo "selected=\"selected\"";
                        }
                        ?>>Serial</option>
                        <option <?php
                        if(isset($_SESSION['category_priview']) && $_SESSION['category_priview'] == "Informacje"){
                            unset($_SESSION['category_priview']);
                            echo "selected=\"selected\"";
                        }
                        ?>>Informacje</option>
                    </select><br/>
                    <br/>Treść artytkułu:<br/><br/>
                    <textarea class="article" name="articleContent" ><?php
                        if(isset($_SESSION['content_priview'])){
                            echo $_SESSION['content_priview'];
                            unset($_SESSION['content_priview']);
                        }
                        ?></textarea>
                    <input class="article" type="submit" name="add_new" value="Dodaj"/>
                    <input class="article" type="submit" name="priview" value="Podgląd artykułu"/>
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