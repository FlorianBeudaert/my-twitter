<?php
include("../Database/dbConnect.php");

session_start(); // Demarre la session 

if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];
    $result = $dbconnect->query("SELECT * FROM users WHERE id = '$login'");
    $result = $result->fetch();

    // RECUPERE LES INFOS

    $user_id = $result['id'];
    $message = $_POST['message'];
    if(!empty($_POST)){
        if(!empty($_POST)){
            $message = $_POST['message'];
            try {
                $query = "INSERT INTO tweets (user_id, message)
                VALUES (:user_id, :message)";
                $stmt = $dbconnect->prepare($query);
                $stmt->bindParam(':user_id', $user_id);
                $stmt->bindParam(':message', $message);
                $stmt->execute();
                header("Location: ../View/Aff_Tweet.php");
            } catch (PDOException $e) {
                die("Erreur : " . $e->getMessage());
            }

        }
    }
} else {
    header('Location: ../View/connexion.php');
    exit();
}
?>
