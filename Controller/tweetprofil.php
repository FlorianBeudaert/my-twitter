<?php
include("../Database/dbConnect.php");

if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];
    $result = $dbconnect->query("SELECT * FROM tweets WHERE user_id = '$login' ORDER BY id DESC LIMIT 4");
    $data = $result->fetchAll();
    $alltweets = [];
    if (count($data) >0) {
        foreach($data as $value){
            $date = $value['date'];
            $message = $value['message'];
                $html = "<div class='flex items-center mb-5'>
                <div class='w-[75px] h-[75px] bg-[url($logo)] bg-cover bg-center mr-5 rounded-[50%] border-2 border-cyan-600'></div>
                <div class='flex-[1]'>
                <div class='text-lg font-[bold] font-bold'>$user</div>
                <div class='text-sm text-[#808080] mb-[5px]'>$date</div>
                <div class='text-base text-[#14171a]'>$message</div>
                </div>
                </div>";
                array_push($alltweets, $html);             
            }
        } 
        else {
            $html = "Aucun tweet";
            array_push($alltweets, $html);
        }
} else {
    header('Location: ../View/connexion.php');
    exit();
}
?>