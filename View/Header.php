<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- <title>Twitter Nav</title> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/logo.png" />
    <link rel="stylesheet" href="./css/dark.css">
    <script src="../script/dropdown.js"></script>
    <?php include '../Controller/status.php'?>
</head>
<body>

<div class="flex items-center justify-between bg-blue-500 p-4">
  <div class="flex items-center space-x-4">
    <img src="assets/logo.png" alt="twitterlogo" class="w-8 h-8">
    <h2 class="text-white text-xl font-bold">Twitter</h2>
  </div>

  <div class="flex md:hidden">
    <button type="button" class="text-white hover:text-gray-200 focus:outline-none">
      <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
      </svg>
    </button>
  </div>

  <ul class="hidden md:flex items-center space-x-4 bg-blue-500 p-4" id="menu">

    <li><a href="./Aff_Tweet.php" class="text-white hover:text-gray-200">Accueil</a></li>
    <li><a href="./explorer.php" class="text-white hover:text-gray-200">Explorer</a></li>
    <li class="<?php echo $profilstatus?>"><a href="./message.php" class="text-white hover:text-gray-200">Message</a></li>
    <li class="<?php echo $profilstatus?>"><a href="./profil.php" class="text-white hover:text-gray-200">Profil</a></li>
    <li class="<?php echo $authstatus?>"><a href="./connexion.php" class="text-white hover:text-gray-200">Connexion</a></li>
    <li class="<?php echo $authstatus?>"><a href="./inscription.php" class="text-white hover:text-gray-200">Inscription</a></li>
      <a href="../View/Tweet.php" class="tweet-btn flex items-center justify-center text-white bg-blue-400 rounded-full h-10 w-10 hover:bg-blue-500 <?php echo $profilstatus?>">
        <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
        </svg>
      </a>
    </li>
    <li>
      <h3 id="DarkModetext" class="text-black text-sm mb-2">Dark Mode is OFF</h3>
      <button onclick="darkMode()" class="bg-black text-white p-1 rounded-lg">Dark</button>
      <button onclick="lightMode()" class="bg-white text-black p-1 rounded-lg">Light</button>
      <button onclick="blueMode()" class="bg-blue-600 text-white p-1 rounded-lg">Blue</button>
    </li>
  </ul>
</div>
</body>
<script src="./script/dropdown.js"></script>
<script src="../script/dark.js"></script>

</html>