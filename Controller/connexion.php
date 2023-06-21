<?php
include("../Database/dbConnect.php");

session_start(); // Démarre la session

if (!empty($_GET)) {
    $login = $_GET['login'];
    $user_password = $_GET['password'];
    $user_password = hash('ripemd160', $user_password);
    if (!empty($login)) {
        $result = $dbconnect->query("SELECT id, password FROM users WHERE email = '$login' OR nickname = '$login'");
        $row_count = $result->rowCount();
        if ($row_count == 1) {
            $result = $result->fetch();
            $password_db = $result['password'];
            if (!empty($user_password)) {
                if ($user_password === $password_db) {
                    header('Location: ../View/profil.php');
                    $_SESSION['login'] = $login; // Stocke le nom d'utilisateur dans une variable de session
                    $_SESSION['user_id'] = $result['id']; // Stocke l'ID de l'utilisateur dans une variable de session
                } else {
                    echo "Password Incorrect";
                }
            }
        } else {
            echo "Identifiant non trouvé.";

        }
    }

}
?>