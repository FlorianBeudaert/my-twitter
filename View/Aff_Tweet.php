<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./Header.php";?>
    <?php include "../Controller/aff_tweetcontroller.php";?>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tweet</title>
</head>
<body>
    <div class="back tweet-section">
        <?php echo $tweet?>
    </div>
    <script src="../script/refresh.js"></script>
</body>
</html>