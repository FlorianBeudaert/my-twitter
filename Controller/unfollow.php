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
    var_dump($follow);
    var_dump($user_id);

    if (strpos($follow, $user_id) !== false) {
        // L'utilisateur est suivi, on le supprime de la chaîne de suivi
        $follow_array = explode(",", $follow);
        $key = array_search($user_id, $follow_array);
        if ($key !== false) {
            // Si l'utilisateur est le premier de la chaîne
            if ($key == 0) {
                $follow_array = array_slice($follow_array, 1);
            // Si l'utilisateur est le dernier de la chaîne
            } else if ($key == count($follow_array) - 1) {
                array_pop($follow_array);
            // Si l'utilisateur est dans le milieu de la chaîne
            } else {
                unset($follow_array[$key]);
                $follow_array = array_values($follow_array);
            }
            $follow2 = implode(",", $follow_array);
        } else {
            $follow2 = $follow;
        }
    } else {
        $follow2 = $follow;
    }
    
    var_dump($follow2);
    
    $stmt = $dbconnect->prepare("UPDATE users SET follows = :follows WHERE users.id = :user_id");

    $stmt->execute(array(':follows' => $follow2, ':user_id' => $login));
    header("Location: ../View/Aff_Tweet.php");
}

?>