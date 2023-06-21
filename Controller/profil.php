<?php
include("../Database/dbConnect.php");

if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];
    $result = $dbconnect->query("SELECT * FROM users WHERE id = '$login'");
    $data = $result->fetch();

    $user = $data['nickname'];
    $userat = str_replace(' ', '_', $user);
    $followers = 0;
    $sql = $dbconnect->query("SELECT follows FROM users");
    while ($table = $sql->fetch()) {
        $follows = $table['follows'];
        if (strpos($follows, $login) !== false) {
            $followers++;
        }
    }
    $follows = $data['follows'];
    if($follows == null){
        $follows = 0;
    } else {
        $follows = count(array_filter(explode(',', $follows)));
    }
    $logo = $data['picture'];
    if($logo == NULL) {
        $logo = "../View/assets/picture.jpg";
    }
} else {
    header('Location: ../View/connexion.php');
    exit();
}
?>