<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-400">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-40" class="fill-blue-500" viewBox="0 0 24 24">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg>
                <h1 class="text-2xl font-bold text-gray-800">Se connecter à Twitter</h1>
            </div>
            <form class="mt-6" method="get" action="../Controller/connexion.php">
                <div class="flex flex-col space-y-2">
                    <label class="text-gray-500 font-medium" for="login">Email ou nom d'utilisateur</label>
                    <input
                        class="border border-gray-300 py-2 px-3 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        type="text" name="login" id="login" required>
                </div>
                <div class="flex flex-col space-y-2 mt-4">
                    <label class="text-gray-500 font-medium" for="password">Mot de passe</label>
                    <input
                        class="border border-gray-300 py-2 px-3 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        type="password" name="password" id="password" required>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                            <button type="button" onclick="togglePassword()"><i class="fa-solid fa-eye"></i></button>
                    </div>
                    <a class="text-sm text-indigo-600 hover:text-indigo-500" href="./inscription.php">Vous n'avez aucun compte?</a>
                </div>
                <div class="mt-6">
                    <button
                        class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../script/ShowPsw.js"></script>
</body>
</html>