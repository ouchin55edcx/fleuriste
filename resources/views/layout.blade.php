<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleurs Fraîches - Livraison à Domicile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <nav class="bg-white shadow-md fixed w-full z-10 transition-all duration-300" id="navbar">
        <div class="flex justify-between items-center py-4">
            <a href="#" class="text-2xl font-bold text-black flex items-center">
                <i class="fas fa-flower-daffodil mr-2"></i>
                FleursFraîches
            </a>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="nav-link text-white hover:text-primary transition-colors duration-300 flex items-center">
                    <i class="fas fa-home mr-2"></i>
                    Home
                </a>
                <a href="#" class="nav-link text-white hover:text-primary transition-colors duration-300 flex items-center">
                    <i class="fas fa-store mr-2"></i>
                    Product
                </a>
                <a href="#" class="nav-link text-white hover:text-primary transition-colors duration-300 flex items-center relative">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Panier
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">1</span>
                </a>
            </div>
            <button class="md:hidden text-black mr-4 focus:outline-none" id="menuToggle">
                <i class="fas fa-bars w-6 h-6"></i>
            </button>
        </div>
        <div class="md:hidden hidden" id="mobileMenu">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200 flex items-center">
                <i class="fas fa-home mr-2 w-5"></i>
                Home
            </a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200 flex items-center">
                <i class="fas fa-store mr-2 w-5"></i>
                Product
            </a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200 flex items-center relative">
                <i class="fas fa-shopping-cart mr-2 w-5"></i>
                Panier
                <span class="ml-2 bg-red-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">1</span>
            </a>
        </div>
    </nav> 


    @yield('content')

    
    <footer class="bg-gradient-to-br from-green-600 to-green-800 text-white py-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+CjxyZWN0IHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgZmlsbD0iIzFhNzIzYiI+PC9yZWN0Pgo8Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIyMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjM4MDRkIiBzdHJva2Utd2lkdGg9IjIiPjwvY2lyY2xlPgo8L3N2Zz4=')] opacity-5"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-wrap justify-between -mx-4">
                <div class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
                    <h3 class="text-2xl font-bold mb-6 border-b-2 border-green-400 pb-2 inline-block">FleursFraîches</h3>
                    <p class="text-green-100 leading-relaxed">Des fleurs fraîches livrées à votre porte, pour illuminer votre quotidien.</p>
                </div>
                <div class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
                    <h4 class="text-xl font-semibold mb-6 border-b-2 border-green-400 pb-2 inline-block">Liens rapides</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-green-100 hover:text-white transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Accueil</a></li>
                        <li><a href="#" class="text-green-100 hover:text-white transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Bouquets</a></li>
                        <li><a href="#" class="text-green-100 hover:text-white transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Comment ça marche</a></li>
                        <li><a href="#" class="text-green-100 hover:text-white transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
                    <h4 class="text-xl font-semibold mb-6 border-b-2 border-green-400 pb-2 inline-block">Contact</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center text-green-100"><i class="fas fa-envelope mr-3"></i>contact@fleursfraîches.com</li>
                        <li class="flex items-center text-green-100"><i class="fas fa-phone mr-3"></i>+33 1 23 45 67 89</li>
                        <li class="flex items-center text-green-100"><i class="fas fa-map-marker-alt mr-3"></i>123 Rue des Fleurs, Paris</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 px-4">
                    <h4 class="text-xl font-semibold mb-6 border-b-2 border-green-400 pb-2 inline-block">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-green-700 hover:bg-green-600 text-white p-2 rounded-full transition-colors duration-300">
                            <i class="fab fa-facebook-f w-5 h-5 flex items-center justify-center"></i>
                        </a>
                        <a href="#" class="bg-green-700 hover:bg-green-600 text-white p-2 rounded-full transition-colors duration-300">
                            <i class="fab fa-twitter w-5 h-5 flex items-center justify-center"></i>
                        </a>
                        <a href="#" class="bg-green-700 hover:bg-green-600 text-white p-2 rounded-full transition-colors duration-300">
                            <i class="fab fa-instagram w-5 h-5 flex items-center justify-center"></i>
                        </a>
                    </div>
                    <div class="mt-6">
                        <h5 class="text-lg font-semibold mb-3">Newsletter</h5>
                        <form class="flex">
                            <input type="email" placeholder="Votre email" class="bg-green-700 text-white px-4 py-2 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-400 flex-grow">
                            <button type="submit" class="bg-green-500 hover:bg-green-400 text-white px-4 py-2 rounded-r-md transition-colors duration-300">S'abonner</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center text-green-100 border-t border-green-500 pt-8">
                <p>&copy; 2024 FleursFraîches. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <script src="js/navbar.js"></script>
</body>
</html>