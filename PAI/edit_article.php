<?php

session_start();
if (!isset($_SESSION['zalogowany'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['articleID'])) {

    require_once "connect.php";

    mysqli_report(MYSQLI_REPORT_STRICT);
    try {
        $connection = new mysqli($host, $db_user, $db_password, $db_name);
        if ($connection->connect_errno != 0) {
            throw new Exception(mysqli_connect_errno());
        } else {

            $id = $_POST['articleID'];
            if(isset($_POST['edit_article'])){
                $result = $connection->query("SELECT * FROM articles where id = '$id'");

                if (!$result) throw new Exception($polaczenie->error);

                if ($result->num_rows != 0) {
                    $row = $result->fetch_array();
                    $_SESSION['title_priview'] = $row['title'];
                    $_SESSION['category_priview'] = $row['category'];
                    $_SESSION['content_priview'] = $row['content'];
                    $_SESSION['articleID'] = $row['id'];

                }
            }
            else if(isset($_POST['delete_article'])){
                $result = $connection->query("DELETE FROM articles WHERE id='$id'");

                if (!$result) throw new Exception($polaczenie->error);

                $_SESSION['article_deleted'] = true;
                header('Location: articles.php');
                exit();
            }

        }
        $connection->close();
    } catch (Exception $e) {
        echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
        echo '<br />Informacja developerska: ' . $e;
    }
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
            <h4>Edytuj artykuł</h4>
            <div class="postContent">
                <form class="articleForm" action="edit_article_in_DB.php" method="post">

                    Tytuł: <input class="article" type="text" name="articleTitle" value="<?php
                    if (isset($_SESSION['title_priview'])) {
                        echo $_SESSION['title_priview'];
                        unset($_SESSION['title_priview']);
                    }

                    ?>"><br/>
                    Kategoria:
                    <select class="article" name="category">
                        <option <?php
                        if (isset($_SESSION['category_priview']) && $_SESSION['category_priview'] == "Film") {
                            unset($_SESSION['category_priview']);
                            echo "selected=\"selected\"";
                        }
                        ?>>Film
                        </option>
                        <option <?php
                        if (isset($_SESSION['category_priview']) && $_SESSION['category_priview'] == "Serial") {
                            unset($_SESSION['category_priview']);
                            echo "selected=\"selected\"";
                        }
                        ?>>Serial
                        </option>
                        <option <?php
                        if (isset($_SESSION['category_priview']) && $_SESSION['category_priview'] == "Informacje") {
                            unset($_SESSION['category_priview']);
                            echo "selected=\"selected\"";
                        }
                        ?>>Informacje
                        </option>
                    </select><br/>
                    <br/>Treść artytkułu:<br/><br/>
                    <textarea class="article" name="articleContent"><?php
                        if (isset($_SESSION['content_priview'])) {
                            echo $_SESSION['content_priview'];
                            unset($_SESSION['content_priview']);
                        }
                        ?></textarea>
                    <input class="article" type="submit" name="edit" value="Zapisz zmiany"/>
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