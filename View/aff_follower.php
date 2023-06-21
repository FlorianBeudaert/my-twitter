<!DOCTYPE html>
<html>
<head>
	<title>Followers</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<?php include("./Header.php")?>
	<?php include("../Controller/aff_followers.php")?>
</head>
<body class="bg-[#f5f8fa] m-0 p-0 font-sans">
	<header class="bg-[#1da1f2] text-white flex items-center justify-between p-2.5">
		<h1>Followers</h1>
		<a href="./profil.php"><button class="bg-transparent text-white text-sm cursor-pointer border-[none] hover:underline">Retour au Profil</button></a>
	</header>
	</div>
	<div class="m-0 m-auto w-[80%]"> 

	<div class="flex w-full flex-wrap gap-4 mt-6">
		<?php 
		foreach($alluser as $value){
			echo $value;
		}
		?>
	</div>

	</div>

	
</body>
</html>
