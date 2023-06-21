<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modifier le profil</title>
	<script src="https://cdn.tailwindcss.com"></script>
    <script src="../script/ShowPsw.js"></script>
    <?php include "./Header.php"?>
	<?php include "../Controller/userdata.php"?>
</head>
<body class="bg-[#f5f8fa] m-0 p-0 font-sans">
	<header class="bg-[#1da1f2] text-white flex items-center justify-between p-2.5">
		<h1>Modifier le profil</h1>
		<a href="./profil.php"><button class="bg-transparent text-white text-sm cursor-pointer border-[none] hover:underline">Retour au Profil</button></a>
	</header>
	<div class="shadow-[0_2px_4px_rgba(0,0,0,0.2)] m-5 p-5">
		<form action="../Controller/edituser.php" method="post">
			<div class="mb-5">
				<label for="picture" class="block mb-2 font-bold">Photo de profil :</label>
				<input type="url" id="picture" name="picture" value="<?php echo $picture_db?>" class="border border-gray-400 p-2 w-full text-black" placeholder="Inserer un lien">
			</div>
            <div class="mb-5">
			    <label for="nickname" class="block mb-2 font-bold">Nom d'utilisateur :</label>
			    <input type="text" id="nickname" name="nickname" value="<?php echo $nickname_db?>" required class="border border-gray-400 p-2 w-full text-black">
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 font-bold">Email :</label>
                <input type="email" id="email" name="email" value="<?php echo $email_db?>" required class="border border-gray-400 p-2 w-full text-black">
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 font-bold">Mot de passe actuel :</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe actuel" required class="border border-gray-400 p-2 w-full text-black">
                <button class="mt-2" type="button" onclick="togglePassword()">Afficher le mot de passe</button>
            </div>

            <div class="mb-5">
                <label for="newpassword" class="block mb-2 font-bold">Nouveau mot de passe :</label>
                <input type="password" id="newpassword" name="newpassword" placeholder="Nouveau mot de passe" required class="border border-gray-400 p-2 w-full text-black">
                <button class="mt-2" type="button" onclick="toggleNewPassword()">Afficher le mot de passe</button>
            </div>

            <div class="flex justify-center">
                <input type="submit" value="Enregistrer" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700 cursor-pointer">
            </div>
        </form> 
    </div>
</body>
</html>