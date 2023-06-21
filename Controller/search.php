<?php
include("../Database/dbConnect.php");

$output = '';
$tweet = '';
if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];

    if(isset($_POST['tweet'])){
        $str = $_POST['tweet'];
        $finalstr = substr($str, 1);

        if (strpos($str, '@') === 0) {
            $result = $dbconnect->query("SELECT * FROM users WHERE nickname LIKE '$finalstr%'");

            $html = '';
            $div = '';

            while ($row = $result->fetch()) {
                $user = $row['nickname'];
                $id_user = $row['id'];
                $userat = str_replace(' ', '_', $user);
                $logo = $row['picture'];
                if ($logo == NULL) {
                    $logo = "../View/assets/picture.jpg";
                }
                $div = "<div class='m-0 m-auto w-[80%]'> 
                            <div class='flex w-full flex-wrap gap-4 mt-6'>";
                $html .=                     
                "<form class='m-0 p-0' method='post' action='./visit.php'>
                    <button type>
                        <div class='flex flex-col bg-[#fefefe] items-center border-[#00A3FF] rounded-[15px] w-[275px] h-[315px] border p-5 hover:scale-[1.025] hover:transition hover:drop-shadow-2xl'>
                            <div class='w-[90px] h-[90px] bg-gray-300 rounded-full overflow-hidden bg-[url($logo)] bg-cover bg-center drop-shadow'></div>
                                <div class='mt-4 flex flex-col gap-1 items-center'>
                                    <h2 class='text-lg font-semibold'>$user</h2>
                                    <input name='user_id' type='hidden' value='$id_user'>
                                    <p class='text-gray-600'>@$userat</p>
                                    </div>
                                <div class='flex flex-row justify-around w-full mt-8'>
                            </div>
                        </div>
                    </button>
                </form>";
            }

            $output .= $html;
        } elseif (strpos($str, '#') === 0) { // Modification ici
            $query = "SELECT users.*, tweets.* FROM tweets INNER JOIN users ON users.id = tweets.user_id WHERE message LIKE '%$str%' ORDER BY tweets.id DESC"; // Modification ici
            $result = $dbconnect->query($query);
            
            $div = '';
            // Affiche les résultats
            while ($row = $result->fetch()) { // Modification ici
                $user_id = $row['user_id'];
                $user = $row['nickname'];
                $message = $row['message'];
                $picture = $row['picture'];
                $date = $row['date'];
                
                if ($picture == NULL) {
                    $output .= "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='../View/assets/picture.jpg' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
                }
                    else {
                    $output .=  "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='$picture' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
                }
            }
        } else {
            echo 'Utilisez "@" si vous voulez rechercher un utilisateur et "#" si vous cherchez une tendance';
        }
    }
} else {
    // RECUPERER LES DONNEE DES INPUT
        if(isset($_POST['tweet'])){
            $str = $_POST['tweet'];
            $finalstr = substr($str, 1);
            if (strpos($str, '@') === 0) {
                $result = $dbconnect->query("SELECT * FROM users WHERE nickname LIKE '$finalstr%'");
    
                $html = '';
                $div = '';
    
                while ($row = $result->fetch()) {
                    $user = $row['nickname'];
                    $id_user = $row['id'];
                    $userat = str_replace(' ', '_', $user);
                    $logo = $row['picture'];
                    if ($logo == NULL) {
                        $logo = "../View/assets/picture.jpg";
                    }
                    $div = "<div class='m-0 m-auto w-[80%]'> 
                                <div class='flex w-full flex-wrap gap-4 mt-6'>";
                    $html .=                     
                    "<form class='m-0 p-0' method='post' action='./visit.php'>
                        <button type>
                            <div class='flex flex-col bg-[#fefefe] items-center border-[#00A3FF] rounded-[15px] w-[275px] h-[315px] border p-5 hover:scale-[1.025] hover:transition hover:drop-shadow-2xl'>
                                <div class='w-[90px] h-[90px] bg-gray-300 rounded-full overflow-hidden bg-[url($logo)] bg-cover bg-center drop-shadow'></div>
                                    <div class='mt-4 flex flex-col gap-1 items-center'>
                                        <h2 class='text-lg font-semibold'>$user</h2>
                                        <input name='user_id' type='hidden' value='$id_user'>
                                        <p class='text-gray-600'>@$userat</p>
                                        </div>
                                    <div class='flex flex-row justify-around w-full mt-8'>
                                </div>
                            </div>
                        </button>
                    </form>";
                }
    
    
                $output .= $html;
        } elseif (strpos($str, '#') === 0) { // Modification ici
            $query = "SELECT users.*, tweets.* FROM tweets INNER JOIN users ON users.id = tweets.user_id WHERE message LIKE '%$str%' ORDER BY tweets.id DESC"; // Modification ici
            $result = $dbconnect->query($query);
            
            // Affiche les résultats
            while ($row = $result->fetch()) { // Modification ici
                $user_id = $row['user_id'];
                $user = $row['nickname'];
                $message = $row['message'];
                $picture = $row['picture'];
                $date = $row['date'];
                
                if ($picture == NULL) {
                    $output .= "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='../View/assets/picture.jpg' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
                }
                    else {
                    $output .=  "<div class='flex justify-center mb-4 mt-4'><div class='tweet flex space-x-4 w-3/4 rounded-lg' style='border: 1px solid #D3D3D3; padding: 1rem;'>" . "<img class='object-cover profile-picture bg-gray-300 rounded-full w-16 h-16' style='background-position: center center; background-repeat: no-repeat; background-size: cover;' src='$picture' alt='Rounded avatar'>" . "<div>" . "<form method='post' action='./visit.php'><button class='author font-bold text-gray-800' style='font-size: 1.4rem;'>$user</button><input name='user_id' type='hidden' value='$user_id'></form><div class='text-gray-500 text-1xl'>$date</div>" . "<div class='content text-gray-700' style='margin-top: 0.5rem;'>" . "<p class='text-sm text-base text-gray-700;'>$message</p>" . "</div>" . "</div>" . "</div>" . "</div>";
                }
            }
        } else {
            echo 'Utilisez "@" si vous voulez rechercher un utilisateur et "#" si vous cherchez une tendance';
        }
    }
}
?>