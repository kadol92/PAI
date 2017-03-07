<?php

require_once "connect.php";
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $connection = new mysqli($host, $db_user, $db_password, $db_name);
    if ($connection->connect_errno != 0) {
        throw new Exception(mysqli_connect_errno());
    } else {
        //Czy email już istnieje?
        $category = "Informacje";
        $result = $connection->query("SELECT * FROM articles WHERE category ='$category' ORDER BY id DESC ");

        if (!$result) throw new Exception($connection->error);

        if ($result->num_rows != 0) {
            while ($row = $result->fetch_array()) {

                if ($row['category'] == "Film") {
                    $icon = "<i class=\"icon-video-2\"></i>";
                } else if ($row['category'] == "Serial") {
                    $icon = "<i class=\"icon-video\"></i>";
                } else {
                    $icon = "<i class=\"icon-info-circled\"></i>";
                }

                echo "        <div class=\"post\">\r\n";
                echo "            <h4>" . $icon . $row['title'] . "</h4>\r\n";
                echo "            <div class=\"postContent\">\r\n";
                echo "              " . $row['content'] . "\r\n";
                echo "            </div>\r\n";
                echo "            <div class=\"postInfo\">\r\n";
                echo "                <i class=\"icon-calendar\"></i>" . $row['date'] . "\r\n";
                echo "                <i class=\"icon-tag\"></i>" . $row['category'] . "\r\n";
                echo "                <i class=\"icon-user\"></i>" . $row['user'] . "\r\n";
                echo "            </div>\r\n";
                echo "        </div>\r\n";


            }
        }
    }
    $connection->close();
} catch (Exception $e) {
    echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
    echo '<br />Informacja developerska: ' . $e;
}

?>