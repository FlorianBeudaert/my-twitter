<?php 
include("../Database/dbConnect.php"); 

$tweet = "";

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $query = "SELECT users.*, tweets.* FROM tweets INNER JOIN users ON users.id = tweets.user_id ORDER BY tweets.id DESC";
    $result = $dbconnect->query($query);
    

    // Affiche les résultats
    while ($row = $result->fetch()) {
        $user_id = $row['user_id'];

        $user = $row['nickname'];
        $message = $row['message'];
        $picture = $row['picture'];
        $date = $row['date'];
        
        if ($picture == NULL) {
             $tweet .= "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='../View/assets/picture.jpg' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
        }
            else {
            $tweet .=  "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='$picture' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
        }
    }
} else {
    $query = "SELECT users.*, tweets.* FROM tweets INNER JOIN users ON users.id = tweets.user_id ORDER BY tweets.id DESC";
    $result = $dbconnect->query($query);
    

    // Affiche les résultats
    while ($row = $result->fetch()) {
        $user_id = $row['user_id'];

        $user = $row['nickname'];
        $message = $row['message'];
        $picture = $row['picture'];
        $date = $row['date'];
        
        if ($picture == NULL) {
            $tweet .= "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='../View/assets/picture.jpg' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
        }
            else {
            $tweet .=  "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='$picture' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
        }
    }
}
?>