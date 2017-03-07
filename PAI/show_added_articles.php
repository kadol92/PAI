<?php

require_once "connect.php";
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $connection = new mysqli($host, $db_user, $db_password, $db_name);
    if ($connection->connect_errno != 0) {
        throw new Exception(mysqli_connect_errno());
    } else {
        //Czy email już istnieje?
        $result = $connection->query("SELECT * FROM articles ORDER BY id DESC ");

        if (!$result) throw new Exception($polaczenie->error);

        if ($result->num_rows != 0) {
            while ($row = $result->fetch_array()) {

                echo "<option value=\"" . $row['id'] . "\">" . "[" . $row['date'] . "]" . " [" . $row['user'] . "]" . " [ " . $row['title'] . " ]" . "</option>" . "\r\n";


            }
        }
    }
    $connection->close();
} catch (Exception $e) {
    echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
    echo '<br />Informacja developerska: ' . $e;
}

?>