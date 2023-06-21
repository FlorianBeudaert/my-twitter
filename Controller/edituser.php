<?php
include("../Database/dbConnect.php");

session_start();

if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];
    $result = $dbconnect->query("SELECT users.* FROM users WHERE id = '$login'");
    $result = $result->fetch();

    // RECUPERER LES DONNEES DE BD
    $user_id = $result['id'];
    $password_bd = $result['password'];

    // RECUPERER LES DONNEE DES INPUTS
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $picture = $_POST['picture'];


    $password = hash('ripemd160',$password);
    $newpassword = hash('ripemd160',$newpassword);
    if(!empty($_POST)){
        if($password === $password_bd) {
            try {
                $stmt = $dbconnect->prepare("UPDATE users SET nickname = :nickname, password = :password, email = :email, picture = :picture WHERE users.id = :user_id");
                $stmt->execute(array(':nickname' => $nickname, ':password' => $newpassword, ':email' => $email, ':picture' => $picture, ':user_id' => $user_id));
                header('Location: ../View/profil.php');
            } catch (PDOException $e) {
                die("Erreur : " . $e->getMessage());
            }
        }
        else {
            echo "Mot de passe Incorrect";
        }
    }
}
else {
    header('Location: ../View/connexion.php');
    exit();
}
?>
