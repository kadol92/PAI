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
    <div class="logo">
        <img src="img/logo.png"/> Movie House
        <div style="clear: both"></div>
    </div>
    <div class="loginForm">
        <form action="loginToDB.php" method="post">

            <input type="text" name="user_login" placeholder="Login..." onfocus="this.placeholder=''"
                   onblur="this.placeholder='Login...'">
            <input type="password" name="user_password" placeholder="Hasło..." onfocus="this.placeholder=''"
                   onblur="this.placeholder='Hasło...'">
            <input type="submit" value="Zaloguj">
            <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }

            ?>

        </form>
    </div>


</div>

</body>
</html>