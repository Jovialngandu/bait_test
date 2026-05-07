<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Niyako</title>
    <link rel="stylesheet" href="/assets/css/style.css"> 
    <script src="./../assets/css/tailwindcss.js"></script>
    <script src="./../assets/css/lucide.min.js"></script>
</head>
<body>
    <div class="h-screen bg-slate-50 flex justify-between items-center">
        <div class="hidden md:flex w-full h-full bg-black p-12 flex-col justify-center text-white">
            <div class="relative z-10">
                <div class="flex items-center gap-2 mb-8">
                    <div class="bg-white p-2 rounded-lg">
                        <i data-lucide="home" class="text-black" style="width: 24px; height: 24px;"></i>
                    </div>
                    <span class="text-2xl font-bold tracking-tight">Niyako</span>
                </div>
                <h1 class="text-5xl font-bold mb-4">
                    Trouvez votre prochain chez-vous en 2 minutes.
                </h1>
                <p class="text-gray-300 ">
                    La plateforme immobilière de proximité, rapide et 100% sécurisée.
                </p>
            </div>
        </div>

        <div class="h-full w-full p-6 lg:p-16 overflow-auto">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-black">Bon retour !</h2>
                <p class="text-gray-700 mt-2">
                    Connectez-vous pour gérer vos biens ou vos favoris.
                </p>
            </div>

            <form class="space-y-4" method="post" >
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2 ml-1">
                        Nom d'utilisateur
                    </label>
                    <div class="relative">
                        <div class="absolute top-2.5 left-3">
                            <i data-lucide="user" class="text-gray-400" style="width: 20px; height: 20px;"></i>
                        </div>
                        <input
                            type="text"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black pl-10"
                        />
                    </div>
                </div>

                <div class="mb-5">
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-medium text-gray-700">
                            Mot de passe
                        </label>
                        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 hover:underline">Oublié ?</a>
                    </div>

                    <div class="relative">
                        <div class="absolute top-2.5 left-3">
                            <i data-lucide="Lock" class="text-gray-400" style="width: 20px; height: 20px;"></i>
                        </div>
                        <input
                            type="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black pl-10"
                        />
                    </div>
                </div>


                <Bouton 
                    class="border rounded-lg bg-black text-white font-semibold p-2.5 text-sm flex items-center justify-center gap-2 hover:scale-[1.02] transition-transform active:scale-95 hover:bg-gray-800 cursor-pointer" >
                    Se connecter
                    <i data-lucide="ArrowRight"
                        class="group-hover:translate-x-1 transition-transform"
                    ></i>
                </Bouton>
            </form>

            <p class="mt-4 text-center text-gray-600">
                Nouveau sur Niyako ? 
                <a href="#" class="text-blue-600 hover:underline">
                    Créer un compte
                </a>
            </p>
        </div>
    </div>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>