<?php
include("../Database/dbConnect.php");

if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];
    $result = $dbconnect->query("SELECT users.* FROM users WHERE id = '$login'");
    $result = $result->fetch();

    // RECUPERER LES DONNEES DE BD
    $user_id = $result['id'];
    $nickname_db = $result['nickname'];
    $password_db = $result['password'];
    $email_db = $result['email'];
    $picture_db = $result['picture'];
}
else {
header('Location: ../View/connexion.php');
exit();
}
?>