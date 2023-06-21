<!DOCTYPE html>
<html>
<head>
	<title>Mon Profil</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<?php include("./Header.php")?>
    <?php include("../Controller/profil.php")?>
	<?php include("../Controller/tweetprofil.php")?>
</head>
<body class="bg-[#f5f8fa] m-0 p-0 font-sans">
	<header class="bg-[#1da1f2] flex items-center justify-between p-2.5">
		<h1>Mon Profil</h1>
		<a href="./EditUser.php"><button class="bg-transparent text-sm cursor-pointer border-[none] hover:underline">Modifier le Profil</button></a>
	</header>
	<div class="back flex items-center shadow-[0_2px_4px_rgba(0,0,0,0.2)] m-5 p-5">
	<div class="w-[150px] h-[150px] bg-[url('<?php echo $logo?>')] bg-cover bg-center mr-5 rounded-[50%] border-2 border-cyan-600"></div>
		<div>
			<h1 class="m-0 text-2xl font-[bold] mb-2.5 font-bold"><?php echo $user?></h1>
			<h2 class="m-0 text-lg font-[normal] mb-2.5">@<?php echo $userat?></h2>
			<p class="text-sm text-[#657786] m-0">Biographie</p>
			<div class="flex">
				<p><a href="./aff_follower.php"><strong><?php echo $followers?></strong><a> Followers &nbsp; <a href="./aff_follow.php"><strong><?php echo $follows?></strong></a> Follows</p>
			</div>
		</div>
	</div>
	<div class="back shadow-[0_2px_4px_rgba(0,0,0,0.2)] m-5 p-5">
		<?php 
		foreach($alltweets as $value){
			echo $value;
		}
		?>
	</div>
</body>
</html>
