<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user_id'])) {
    $profilstatus = "flex";
    $authstatus = "hidden";
} else {
    $profilstatus = "hidden";
    $authstatus = "flex";
}
?>
