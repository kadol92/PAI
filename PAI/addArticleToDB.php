<?php
session_start();

if (!isset($_SESSION['zalogowany'])) {
    header('Location: index.php');
    exit();
}
if(isset($_POST['articleTitle'])){
    if (isset($_POST['add_new'])) {
        require_once "connect.php";
        $title = $_POST['articleTitle'];
        $content = $_POST['articleContent'];
        $date = date('Y/m/d  H:i:s');
        $user = $_SESSION['user'];
        $category =  $_POST['category'];
        mysqli_report(MYSQLI_REPORT_STRICT);
        try{
            $connection = new mysqli($host, $db_user, $db_password, $db_name);

            if ($connection->connect_errno != 0) {
                echo "test 3";
                throw new Exception(mysqli_connect_errno());

            } else {

                if ($connection->query("INSERT INTO articles VALUES (id, '$title', '$content', '$date', '$category', '$user')")) {
                    $_SESSION['article_added'] = true;
                    echo "test 5";
                    header('Location: addArticle.php');
                }
                echo "test 6";
            }

        }
        catch (Exception $e){
            echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
            echo '<br />Informacja developerska: ' . $e;
        }


    }
    else if (isset($_POST['priview'])) {

        $_SESSION['show_priview'] = true;
        $_SESSION['category_priview'] =  $_POST['category'];
        $_SESSION['title_priview'] =  $_POST['articleTitle'];
        $_SESSION['content_priview'] = $_POST['articleContent'];
        $current_date = date('d/m/Y  H:i:s');
        unset($_SESSION['priview_article']);

        $_SESSION['priview_article'] = "<div class=\"post\"><h4>";

        if($_POST['category'] == "Film"){
            $_SESSION['priview_article'] .=   "<i class=\"icon-video-2\"></i>";
        }
        else if($_POST['category'] == "Serial"){
            $_SESSION['priview_article'] .=  "<i class=\"icon-video\"></i>";
        }
        else{
            $_SESSION['priview_article'] .= "<i class=\"icon-info-circled\"></i>";
        }

        $_SESSION['priview_article'] .=  "[PODGLĄD] ". $_POST['articleTitle'] .
            "</h4><div class=\"postContent\">" . $_POST['articleContent'] . "</div>
            <div class=\"postInfo\">
                <i class=\"icon-calendar\"></i>" . $current_date . "<i class=\"icon-tag\"></i>" . $_POST['category'] .
            "<i class=\"icon-user\"></i>" . $_SESSION['user'] . " </div></div>";

        header('Location: addArticle.php');

    }
}
else{
    header('Location: index.php');
    exit();
}

?>