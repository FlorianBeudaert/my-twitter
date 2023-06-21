<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Inscription</title>
</head>
<body class="flex-col min-h-screen font-mono bg-gray-400">
  <!-- Container -->
  <div class="container mx-auto">
    <div class="flex justify-center px-6 my-12">
      <!-- Row -->
      <div class="w-full xl:w-3/4 lg:w-11/12 flex">
        <!-- Col -->
        <div class="w-full h-auto  bg-gray-400 hidden lg:block lg:w-10/12 bg-cover rounded-l-lg"
          style="background-image: url('../View/assets/twitter-logo.png')"></div>
        <!-- Col -->
        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
          <h3 class="pt-4 text-2xl text-center">Rejoignez Twitter!</h3>
          <form action="../Controller/inscription.php" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
            <div class="mb-4 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="Nom">Nom d'utilisateur</label>
                <input
                  class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  for="Nom" type="text" name="username" id="username" required/>
              </div>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">Email</label>
              <input
                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                type="email" name="email" id="email" required />
            </div>
            <div class="mb-4 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">Mot de passe</label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  type="password" name="password" id="password" required/>
                  <button type="button" onclick="togglePassword()"><i class="fa-solid fa-eye"></i></button>
              </div>
            </div>
            <div class="mb-6 text-center">
              <button
                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="submit">
                S'inscrire
              </button>
            </div>
            <hr class="mb-6 border-t" />
            <div class="text-center">
              <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./connexion.php">Vous avez déjà un compte ? Connectez-vous!</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="css-1dbjc4n r-1awozwy r-1pz39u2 r-18u37iz r-16y2uox"></div>
  <script src="../script/ShowPsw.js"></script>
</body>
</html>