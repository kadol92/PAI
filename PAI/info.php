<?php

session_start();


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
        include_once "getInfo.php";
        ?>
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