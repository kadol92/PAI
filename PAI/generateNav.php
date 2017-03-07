<?php
echo <<<END
<div class="logo">
    <img src="img/logo.png"/> Movie House
    <div style="clear: both"></div>
</div>
<div class="navConteiner">
    <div class="smallLogo">
        <a href="index.php">
            <img src="img/logosmall.png"/><span class="smallSiteName">Movie House</span>
        </a>
    </div>

    <div class="navigation">

        <ol>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="movies.php">Filmy</a></li>
            <li><a href="series.php">Seriale</a></li>
            <li><a href="info.php">Informacje</a></li>
END;
if (isset($_SESSION['zalogowany'])) {

    echo <<<END
                             <li class="user">
                    Panel użytkownika
                    <div class="userPanel">
                            <div class="userAvatar">
END;

    echo "<img src=\"" . $_SESSION['avatar'] . "\"/> </div><ul>";
    echo "<li>Witaj, " . $_SESSION['user'] . "!</li>";
    echo <<<END
                                <li><a href="userInfo.php">Profil</a></li>
                                <li><a href="addArticle.php">Dodaj wpis</a></li>
                                <li><a href="articles.php">Zarządzaj wpisami</a></li>
                                <li><a href="logout.php">[Wyloguj]</a></li>
                            </ul>
                        </div>
                    </li>
END;
} else {
    echo <<<END
    <li class="user">
    Dołącz
    <div class="userPanel">
        <form action="loginToDB.php" method="post">
                <input class="login" type="text" name="user_login" placeholder="Login..." onfocus="this.placeholder=''"
                       onblur="this.placeholder='Login...'">
                <input class="login" type="password" name="user_password" placeholder="Hasło..." onfocus="this.placeholder=''"
                       onblur="this.placeholder='Hasło...'">
                <input class="login" type="submit" value="Zaloguj">
            </form>
END;
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }

    echo <<<END
            <span class="registerInfo">Nie posiadasz konta? <a href="register.php">Zarejestruj się</a></span>
     </div>
</li>
END;

}
echo <<<END
<div style="clear:both;"></div>
        </ol>
    </div>
</div>
END;

?>
