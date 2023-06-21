<?php include "../View/Header.php" ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweeter</title>
    <link rel='stylesheet' href="tweet.css">
    <link rel='stylesheet' href="style.css">

</head>
<body>

  <form method="POST" action="../Controller/tweetController.php" name="Tweet" class="p-6 rounded-lg shadow-md">
    <div class="flex flex-col items-center">
      <textarea class="tweets border-2 border-gray-400 py-2 w-full lg:w-1/2 rounded-xl focus:outline-none focus:border-blue-500 drop-shadow-2xl" id="tweets" rows="3" name="message" placeholder="Quoi de neuf ?" onkeyup="checkLength()"></textarea>
      <span id="charCount" class="text-gray-500 text-sm my-2">140</span>
      <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
      <input type="hidden" name="origin" value="0">
      <input type="submit" name="submit_tweet" class="btn bg-blue-500 text-white py-2 px-4 rounded-xl  hover:bg-blue-600 transition-colors" value="Tweet">
    </div>
  </form>

  <script src="../script/Tweet.js"></script>
  <script src="../script/dark.js"></script>
</body>

</html>