<?php
include("../Database/dbConnect.php");

if (isset($_SESSION['user_id'])) {
    $login = $_SESSION['user_id'];

    // SI JE SUIS SUR MON PROFIL

    if(empty($_POST['id'])){
        $result = $dbconnect->query("SELECT follows FROM users WHERE id = '$login'");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
    
        $followed_ids = explode(',', $data[0]['follows']);
        $followed_ids = array_filter($followed_ids);
    
        $alluser = [];
        if (count($followed_ids) > 0) {
            foreach ($followed_ids as $followed_id) {
                $result2 = $dbconnect->query("SELECT id FROM users WHERE FIND_IN_SET('$login', follows) > 0");
                $followed_users = $result2->fetchAll(PDO::FETCH_COLUMN);
            
                foreach ($followed_users as $followed_user_id) {
                    $followers = 0;
                    $sql = $dbconnect->query("SELECT follows FROM users");
                    while ($table = $sql->fetch()) {
                        $follows = $table['follows'];
                        if (strpos($follows, $followed_id) !== false) {
                            $followers++;
                        }
                    }
                    $result3 = $dbconnect->query("SELECT * FROM users WHERE id = '$followed_user_id'");
                    $userdata = $result3->fetch();
                    $follows = $userdata['follows'];
                    if($follows == null){
                        $follows = 0;
                    } else {
                        $follows = count(array_filter(explode(',', $follows)));
                    }
                    $user = $userdata['nickname'];
                    $userat = str_replace(' ', '_', $user);
                    $logo = $userdata['picture'];
                    if ($logo == NULL) {
                        $logo = "../View/assets/picture.jpg";
                    }
                    $html =
                    "<form class='m-0 p-0' method='post' action='./visit.php'>
                    <button type>
                            <div class='flex flex-col bg-[#fefefe] items-center border-[#00A3FF] rounded-[15px] w-[275px] h-[315px] border p-5 hover:scale-[1.025] hover:transition hover:drop-shadow-2xl'>
                                <div class='w-[90px] h-[90px] bg-gray-300 rounded-full overflow-hidden bg-[url($logo)] bg-cover bg-center drop-shadow'></div>
                                    <div class='mt-4 flex flex-col gap-1 items-center'>
                                        <h2 class='text-lg font-semibold'>$user</h2>
                                        <input name='user_id' type='hidden' value='$followed_user_id'>
                                        <p class='text-gray-600'>@$userat</p>
                                        </div>
                                    <div class='flex flex-row justify-around w-full mt-8'>
                                    <p><strong>$followers</strong> followers</p>
                                    <p><strong>$follows</strong> follows</p>
                                </div>
                            </div>
                        </button>
                    </form>";
                    array_push($alluser, $html);
                }
            }
        } else {
            $html = "Aucun follower";
            array_push($alluser, $html);
        }
    }

    
} else {
    header('Location: ../View/connexion.php');
    exit();
}
?>