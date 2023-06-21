<?php
include '../Controller/status.php';
include("../Database/dbConnect.php");
$button = "";
if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];
    $user_id = $_POST['user_id'];

    $sql = $dbconnect->query("SELECT * FROM users WHERE id = '$login'");
    $sql = $sql->fetch(); 
    $follow = $sql['follows'];

    if ($login !== $user_id){
        if(strpos($follow, "," . $user_id . ",") !== false || strpos($follow, "," . $user_id) !== false || strpos($follow, $user_id) !== false ){
            $button = "<form method='post' action='../Controller/unfollow.php'><button class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>Unfollow</button><input type='hidden' value='$user_id' name='user_id'> </form>";
        }
        else {
            $button = "<form method='post' action='../Controller/follow.php'><button class='bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded'>Follow</button><input type='hidden' value='$user_id' name='user_id'> </form>";
        }
    } else {
        $button = "<button disabled class='cursor-not-allowed bg-sky-300 text-white font-bold py-2 px-4 rounded'>Follow</button>";
    }
    
    $result = $dbconnect->query("SELECT users.*, tweets.* FROM users INNER JOIN tweets ON tweets.user_id = users.id WHERE users.id = '$user_id' ORDER BY tweets.id DESC LIMIT 4");
    
    $followers = 0;
    $sql = $dbconnect->query("SELECT follows FROM users");
    while ($table = $sql->fetch()) {
        $follows = $table['follows'];
        if (strpos($follows, $user_id) !== false) {
            $followers++;
        }
    }

        $tweets = array(); // Crée le tableau des tweets
        while ($row = $result->fetch()) {
            $follows = $row['follows'];
            if ($follows == NULL) {
                $follows = "0";
            }
            else {
                $follows = count(array_filter(explode(',', $follows)));
            }
            $user = $row['nickname'];
            $userat = str_replace( ' ' , '_' , $user );
            $date = $row['date'];
            $message = $row['message'];
            $picture = $row['picture'];
            
            if($picture == NULL) {
                $logo = "./assets/picture.jpg";
            }
            else {
                $logo = "$picture";
            }
            // Ajouter le tweet au tableau
            $tweets[] = "<div class='flex items-center mb-5'>
                    <div class='w-[75px] h-[75px] bg-[url($logo)] bg-cover bg-center mr-5 rounded-[50%] border-2 border-cyan-600'></div>
                    <div class='flex-[1]'>
                        <div class='text-lg font-[bold] font-bold'>$user</div>
                        <div class='text-sm text-[#808080] mb-[5px]'>$date</div>
                        <div class='text-base text-[#14171a]'>$message</div>
                        </div>
                        </div>";
                    }
                    
                    // Joindre les tweets pour créer la variable $tweet
                    $tweet = implode("", $tweets);
                } else {
    $user_id = $_POST['user_id'];
    $result = $dbconnect->query("SELECT users.*, tweets.* FROM users INNER JOIN tweets ON tweets.user_id = users.id WHERE users.id = '$user_id' ORDER BY tweets.id DESC LIMIT 4");


    $tweets = array(); // Crée le tableau des tweets
        $followers = 0;
    $sql = $dbconnect->query("SELECT follows FROM users");
    while ($table = $sql->fetch()) {
        $follows = $table['follows'];
        if (strpos($follows, $user_id) !== false) {
            $followers++;
        }
    }
    
    while ($row = $result->fetch()) {
        $follows = $row['follows'];
        if($follows == null){
            $follows = 0;
        } else {
            $follows = count(array_filter(explode(',', $follows)));
        }
        $user = $row['nickname'];
        $userat = str_replace( ' ' , '_' , $user );
        $date = $row['date'];
        $message = $row['message'];
        $picture = $row['picture'];
        
        if($picture == NULL) {
            $logo = "./assets/picture.jpg";
        }
        else {
            $logo = "$picture";
        }
        
        // Ajouter le tweet au tableau
        $tweets[] = "<div class='flex items-center mb-5'>
                <div class='w-[75px] h-[75px] bg-[url($logo)] bg-cover bg-center mr-5 rounded-[50%] border-2 border-cyan-600'></div>
                <div class='flex-[1]'>
                    <div class='text-lg font-[bold] font-bold'>$user</div>
                    <div class='text-sm text-[#808080] mb-[5px]'>$date</div>
                    <div class='text-base text-[#14171a]'>$message</div>
                </div>
            </div>";
    }
    
    // Joindre les tweets pour créer la variable $tweet
    $tweet = implode("", $tweets);
}
?>