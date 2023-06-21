<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "Header.php"?>
    <?php include "../Controller/search.php";?>
    <title>Explorer</title>
</head>
  <body>
    <form method="POST" action="./Search.php" name="Tweet" class="container mx-auto">
      <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
          <div class="rounded-md shadow-md p-4">
            <div class="relative">
              <textarea class="back form-textarea w-full rounded-lg py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Que recherchez vous ?" name="tweet" required></textarea>
            </div>
            <div class="mt-4">
              <button type="submit" name="submit_tweet" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">SEARCH</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="tweet-section" style="margin-top: 2rem;">
    <?php echo $output?>
    </div>
  </body>
</html>