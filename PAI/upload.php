<?php
session_start();

if(!isset($_SESSION['zalogowany'])){
    header('Location: index.php');
    exit();
}
$target_dir = "img/avatars/";
$path = $_FILES["fileToUpload"]["name"];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$filename = $_SESSION['user'] . "avatar";
$filepath = $target_dir . $filename . "." . $ext;
if(file_exists($filepath)){
    unlink($filepath);
}
$target_file = $filepath;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $_SESSION['error_avatar'] = "Plik już istnieje";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $_SESSION['error_avatar'] = "Plik zbyt duży.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $_SESSION['error_avatar'] = "Tylko pliki JPG, JPEG, PNG oraz GIF.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    header('Location: userInfo.php');
    exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        require_once "connect.php";

        mysqli_report(MYSQLI_REPORT_STRICT);
        try {
            $connection = new mysqli($host, $db_user, $db_password, $db_name);
            if ($connection->connect_errno != 0) {
                throw new Exception(mysqli_connect_errno());
            } else {

                    $userName = $_SESSION['user'];
                    $_SESSION['avatar'] = $filepath;
                    $result = $connection->query("UPDATE uzytkownicy SET avatar='$filepath' where user='$userName'");



            }
            $connection->close();
        } catch (Exception $e) {
            echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
            echo '<br />Informacja developerska: ' . $e;
        }
        header('Location: userInfo.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
        $_SESSION['error_avatar'] = "NIe udało sie wysłać, sprobuj ponownie.";
    }
}
?>