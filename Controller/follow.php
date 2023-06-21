<?php
include("../Database/dbConnect.php");

session_start(); 

if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];
    $result = $dbconnect->query("SELECT users.* FROM users WHERE id = '$login'");
    $result = $result->fetch(); 

    // RECUPERER LES DONNEES DE BD
    $follow = $result['follows'];
    $user_id = $_POST['user_id'];
    $stmt = $dbconnect->prepare("UPDATE users SET follows = :follows WHERE users.id = :user_id");
    if ($follow == NULL) {
        $stmt->execute(array(':follows' => $user_id, ':user_id' => $login));
        header('Location: ../View/Aff_Tweet.php');
    } else {
        $stmt->execute(array(':follows' => $follow . "," . $user_id, ':user_id' => $login));
        header('Location: ../View/Aff_Tweet.php');
    }
}

?>