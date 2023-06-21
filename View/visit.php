<!DOCTYPE html>
<html>
<head>
	<title>Visite</title>
	<script src="https://cdn.tailwindcss.com"></script>
    <?php include "../Controller/visitprofil.php"?>
	<?php include "./Header.php"?>
</head>
<body class="bg-[#f5f8fa] m-0 p-0 font-sans">
	<header class="bg-[#1da1f2] text-white flex items-center justify-between p-2.5">
		<h1>Visite</h1>
	</header>
	<div class="flex items-center bg-white shadow-[0_2px_4px_rgba(0,0,0,0.2)] m-5 p-5">
		<div class="w-[150px] h-[150px] bg-[url('<?php echo $logo?>')] bg-cover bg-center mr-5 rounded-[50%] border-2 border-cyan-600"></div>
		<div>
			<h1 class="m-0 text-2xl font-[bold] mb-2.5 font-bold"><?php echo $user?></h1>
			<h2 class="m-0 text-lg font-[normal] mb-2.5">@<?php echo $userat?></h2>
			<p class="text-sm text-[#657786] m-0">Biographie</p>
			<div class="flex">
			<p><strong><?php echo $followers?></strong> Followers &nbsp; <form action="./aff_follow.php" method="post"><button><strong><?php echo $follows?></button></strong> Follow<input type="hidden" name="id" value="<?php echo $user_id?>"></form> </p>
			</div>
			<?php echo $button?>
		</div>
	</div>
	<div class="bg-white shadow-[0_2px_4px_rgba(0,0,0,0.2)] m-5 p-5">
		<?php echo $tweet?>
	</div>
</body>
</html>