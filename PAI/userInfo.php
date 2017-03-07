<?php

session_start();
if(!isset($_SESSION['zalogowany'])){
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
        <div class="post">
            <h4>Profil użytkownika <?php
            echo $_SESSION['user'];
                ?></h4>
            <?php
            echo "<div class=\"userAvatar\"><img src=\"" . $_SESSION['avatar'] . "\"/></div>";
            ?>
            <div class="postContent">
                <form action="upload.php" method="post" enctype="multipart/form-data" class="fileUpload">
                    Wybierz plik:<br/><br/>
                    <input class="article" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="article" type="submit" value="Wyślij plik" name="submit"><br/>
                </form>
                <br/>
                <?php
                if(isset($_SESSION['error_avatar'])){
                    echo "<span class=\"register_error\">" . $_SESSION['error_avatar']. "</span>";
                    unset($_SESSION['error_avatar']);
                }
                ?>
                <br/>
                Grupa użytkowników:
                <?php
                echo $_SESSION['group'];
                ?>
            </div>




            <h4>Twoje wpisy</h4><br/>
            <?php
            include_once "getUserArticle.php";
            ?>
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