<?php

session_start();

if ((!isset($_POST['user_login'])) || (!isset($_POST['user_password'])))
{
    header('Location: index.php');
    exit();
}

require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_errno!=0)
{
    echo "Error: ".$connection->connect_errno;
}
else
{
    $login = $_POST['user_login'];
    $haslo = $_POST['user_password'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");

    if ($result = @$connection->query(
        sprintf("SELECT * FROM uzytkownicy WHERE user='%s'",
            mysqli_real_escape_string($connection,$login))))
    {
        $ilu_userow = $result->num_rows;
        if($ilu_userow>0)
        {
            $wiersz = $result->fetch_assoc();

            if (password_verify($haslo, $wiersz['pass']))
            {
                $_SESSION['zalogowany'] = true;
                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['email'] = $wiersz['email'];
                $_SESSION['group'] = $wiersz['usergroup'];
                $_SESSION['avatar'] = $wiersz['avatar'];

                unset($_SESSION['error']);
                $result->free_result();
                header('Location: index.php');
            }
            else
            {
                $_SESSION['error'] = '<span class="loginError">Nieprawidłowy login lub hasło!<br/></span>';
                header('Location: index.php');
            }

        } else {

            $_SESSION['error'] = '<span class="loginError">Nieprawidłowy login lub hasło!<br/></span>';
            header('Location: index.php');

        }

    }

    $connection->close();
}

?>