<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque UAC - FADESP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .uac-bg {
            background-color: #006633;
        }
        
        .uac-text {
            color: #006633;
        }
        
        .uac-border {
            border-color: #006633;
        }
        
        .landing-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar {
            transition: all 0.3s ease;
        }
        
        .sidebar-collapsed {
            width: 80px;
        }
        
        .sidebar-collapsed .nav-text {
            display: none;
        }
        
        .sidebar-collapsed .logo-text {
            display: none;
        }
        
        .sidebar-collapsed .nav-item {
            justify-content: center;
        }
        
        .table-row:hover {
            background-color: #f0f7f0;
        }

        .table-livres {
            width: 100%;
            font-family: Arial, sans-serif;
            border-collapse: collapse;
        }

        .table-livres th {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
            background-color: #f2f2f2 ;
        }
        
        /* Animation for login form */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Router Container -->
    <div id="app">
        <!-- Landing Page (Default View) -->
        <div id="landing-page" class="min-h-screen flex flex-col">
            <!-- Hero Section -->
            <div class="landing-bg flex-grow flex items-center justify-center text-white p-8">
                <div class="text-center max-w-4xl fade-in">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">Bibliothèque Universitaire FADESP</h1>
                    <p class="text-xl md:text-2xl mb-8">Gestion des ressources documentaires de l'Université d'Abomey-Calavi</p>
                    <button onclick="showLoginPage()" class="uac-bg hover:bg-green-800 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                        Accéder au système <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="uac-bg text-white py-6">
                <div class="container mx-auto px-4 text-center">
                    <div class="flex justify-center space-x-6 mb-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="text-sm">
                        © 2023 Université d'Abomey-Calavi - Faculté de Droit et de Science Politique. Tous droits réservés.
                    </p>
                </div>
            </footer>
        </div>
        
        <!-- Login Page -->
        <div id="login-page" class="min-h-screen hidden flex items-center justify-center p-4 bg-gray-100">
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden w-full max-w-md fade-in">
                <div class="uac-bg py-6 px-8 text-center">
                    <img src="https://www.uac.bj/wp-content/uploads/2020/05/logo-uac-blanc.png" alt="UAC Logo" class="h-16 mx-auto mb-4">
                    <h2 class="text-2xl font-bold text-white">Connexion au système</h2>
                </div>
                
                <div class="p-8">
                    <form id="login-form">
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email universitaire</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="prenom.nom@fadesp.uac.bj" required>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Mot de passe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="••••••••" required>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                            </div>
                            <a href="#" class="text-sm uac-text hover:underline">Mot de passe oublié?</a>
                        </div>
                        
                        <button type="submit" class="w-full uac-bg hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                            Se connecter <i class="fas fa-sign-in-alt ml-2"></i>
                        </button>
                    </form>
                    
                    <div class="mt-6 text-center">
                        <button onclick="showLandingPage()" class="text-gray-600 hover:text-gray-800 text-sm">
                            <i class="fas fa-arrow-left mr-2"></i> Retour à l'accueil
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dashboard Page -->
        <div id="dashboard-page" class="min-h-screen hidden">
            <!-- Sidebar -->
            <div class="sidebar bg-white shadow-lg fixed top-0 left-0 h-full w-64 z-50">
                <div class="flex items-center justify-between p-4 border-b">
                    <div class="flex items-center">
                        <img src="https://www.uac.bj/wp-content/uploads/2020/05/logo-uac-blanc.png" alt="UAC Logo" class="h-10">
                        <span class="logo-text ml-3 text-xl font-bold uac-text">FADESP Bibliothèque</span>
                    </div>
                    <button onclick="toggleSidebar()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                
                <nav class="mt-6">
                    <div class="px-4">
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg uac-bg text-white mb-2">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="nav-text ml-3 font-medium">Tableau de bord</span>
                        </div>

                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-2" >
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="nav-text ml-3 font-medium">Entrées</span>
                        </div>


                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-2" onclick="showBooksPage('available')">
                            <i class="fas fa-book"></i>
                            <span class="nav-text ml-3 font-medium">Livres</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </div>
                        
                        <!-- Sous-menu pour livre -->
                        <div class="pl-12 hidden" id="books-submenu">
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-1" onclick="showBooksPage('available')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres disponibles</span>
                            </div>
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="showBooksPage('reserved')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres réservés</span>
                            </div>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-2" onclick="showHistoryPage('borrowed')">
                            <i class="fas fa-history"></i>
                            <span class="nav-text ml-3 font-medium">Historique</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </div>
                        
                        <!-- Sous-menu pour Historique -->
                        <div class="pl-12 hidden" id="history-submenu">
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-1" onclick="showHistoryPage('borrowed')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Entrées-sorties</span>
                            </div>
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="showHistoryPage('reserved')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres réservés</span>
                            </div>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="logout()">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-text ml-3 font-medium">Déconnexion</span>
                        </div>
                    </div>
                </nav>
            </div>
            
            <!-- Tableau de bord -->
            <div class="ml-64 p-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Tableau de bord</h1>
                        <p class="text-gray-600">Bienvenue dans le système de gestion de la bibliothèque</p>
                    </div>
                    <div class="flex items-center">
                        <div class="mr-4 text-right">
                            <p class="text-sm text-gray-500">Heure actuelle</p>
                            <p id="current-time" class="text-xl font-semibold uac-text">--:--:--</p>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-user text-gray-600"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 mr-4">
                                <i class="fas fa-book text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Livres totaux</p>
                                <h3 class="text-2xl font-bold">1,248</h3>
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-yellow-500">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 mr-4">
                                <i class="fas fa-bookmark text-yellow-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Livres réservés</p>
                                <h3 class="text-2xl font-bold">156</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 mr-4">
                                <i class="fas fa-check-circle text-purple-600"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Disponibles</p>
                                <h3 class="text-2xl font-bold">750</h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-8">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold text-gray-800">Activité récente</h2>
                        <button class="text-sm uac-text hover:underline">Voir tout</button>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="p-2 rounded-full bg-green-100 mr-4">
                                <i class="fas fa-book text-green-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Nouveau livre ajouté</p>
                                <p class="text-sm text-gray-500">"Droit constitutionnel avancé" par Prof. Adanguidi</p>
                                <p class="text-xs text-gray-400">Il y a 2 heures</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="p-2 rounded-full bg-blue-100 mr-4">
                                <i class="fas fa-user-graduate text-blue-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Emprunt confirmé</p>
                                <p class="text-sm text-gray-500">Kossi A. a emprunté "Introduction à la science politique"</p>
                                <p class="text-xs text-gray-400">Aujourd'hui, 10:45</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="p-2 rounded-full bg-yellow-100 mr-4">
                                <i class="fas fa-exclamation-triangle text-yellow-600"></i>
                            </div>
                            <div>
                                <p class="font-medium">Retard de retour</p>
                                <p class="text-sm text-gray-500">"Histoire du droit" devait être retourné hier par M. Dossou</p>
                                <p class="text-xs text-gray-400">Hier, 18:30</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-4">Actions rapides</h3>
                        <button onclick="showBooksPage('available')" class="w-full flex items-center justify-between py-2 px-4 mb-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition">
                            <span>Ajouter un livre</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <button onclick="showBooksPage('reserved')" class="w-full flex items-center justify-between py-2 px-4 mb-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition">
                            <span>Enregistrer une entrée</span>
                            <i class="fas fa-hand-holding"></i>
                        </button>
                        <button onclick="showHistoryPage('borrowed')" class="w-full flex items-center justify-between py-2 px-4 bg-gray-100 hover:bg-gray-200 rounded-lg transition">
                            <span>Vérifier les retards</span>
                            <i class="fas fa-clock"></i>
                        </button>
                    </div>
                    
                    <div class="md:col-span-2 bg-white rounded-xl shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-4">Livres populaires</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="book-card bg-gray-50 rounded-lg p-4 text-center transition cursor-pointer">
                                <div class="h-24 bg-blue-100 rounded-lg mb-2 flex items-center justify-center">
                                    <i class="fas fa-book text-blue-500 text-3xl"></i>
                                </div>
                                <p class="text-sm font-medium truncate">Droit des affaires</p>
                                <p class="text-xs text-gray-500">Prof. Lawson</p>
                            </div>
                            <div class="book-card bg-gray-50 rounded-lg p-4 text-center transition cursor-pointer">
                                <div class="h-24 bg-green-100 rounded-lg mb-2 flex items-center justify-center">
                                    <i class="fas fa-book text-green-500 text-3xl"></i>
                                </div>
                                <p class="text-sm font-medium truncate">Science politique</p>
                                <p class="text-xs text-gray-500">Dr. Adékambi</p>
                            </div>
                            <div class="book-card bg-gray-50 rounded-lg p-4 text-center transition cursor-pointer">
                                <div class="h-24 bg-purple-100 rounded-lg mb-2 flex items-center justify-center">
                                    <i class="fas fa-book text-purple-500 text-3xl"></i>
                                </div>
                                <p class="text-sm font-medium truncate">Droit constitutionnel</p>
                                <p class="text-xs text-gray-500">Prof. Adanguidi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- livres Page -->
        <div id="books-page" class="min-h-screen hidden">
            <!-- Sidebar (Same as Dashboard) -->
            <div class="sidebar bg-white shadow-lg fixed top-0 left-0 h-full w-64 z-50">
                <div class="flex items-center justify-between p-4 border-b">
                    <div class="flex items-center">
                        <img src="https://www.uac.bj/wp-content/uploads/2020/05/logo-uac-blanc.png" alt="UAC Logo" class="h-10">
                        <span class="logo-text ml-3 text-xl font-bold uac-text">FADESP Bibliothèque</span>
                    </div>
                    <button onclick="toggleSidebar()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                
                <nav class="mt-6">
                    <div class="px-4">
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-2" onclick="showDashboardPage()">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="nav-text ml-3 font-medium">Tableau de bord</span>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg uac-bg text-white mb-2">
                            <i class="fas fa-book"></i>
                            <span class="nav-text ml-3 font-medium">Livres</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </div>
                        
                        <!-- Submenu for Books -->
                        <div class="pl-12" id="books-submenu-books">
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-1" onclick="showBooksPage('available')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres disponibles</span>
                            </div>
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="showBooksPage('reserved')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres réservés</span>
                            </div>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-2" onclick="showHistoryPage('borrowed')">
                            <i class="fas fa-history"></i>
                            <span class="nav-text ml-3 font-medium">Historique</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </div>
                        
                        <!-- Submenu         for History -->
                        <div class="pl-12 hidden" id="history-submenu-books">
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-1" onclick="showHistoryPage('borrowed')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Entrées-sorties</span>
                            </div>
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="showHistoryPage('reserved')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres réservés</span>
                            </div>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="logout()">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-text ml-3 font-medium">Déconnexion</span>
                        </div>
                    </div>
                </nav>
            </div>
            
            <!-- Page livres dispo -->
            <div class="ml-64 p-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 id="books-page-title" class="text-3xl font-bold text-gray-800">Livres disponibles</h1>
                        <p id="books-page-subtitle" class="text-gray-600">Liste complète des livres disponibles à l'emprunt</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" id="book-search" class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Rechercher un livre...">
                        </div>
                        <button id="add-book-btn"  class="uac-bg hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-plus mr-2"></i> Ajouter
                        </button>
                    </div>
                </div>
                
                <!--Table livres-->
                <?php
                $db=new PDO ("mysql:host=localhost;dbname=gestion_bibliothèque","root","");
                $req=$db->query("SELECT * FROM livre");
                
                echo '<table class="min-w-full divide-y divide-gray-200">
                <tr class="uac-bg">
                <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Titre</td>
                <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Catégorie</td>
                <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Section</td>
                <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Edition</td>
                <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Auteur</td>
                <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Modifier</td>
                <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Supprimer</td>
                </tr>';
                foreach($req as $cle=>$valeur){  
                    echo "  
                <tr>
                <td scope='col' class='px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider'>".$valeur["nom_livre"]."</td>
                <td scope='col' class='px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider'>".$valeur["cat_livre"]."</td>
                <td scope='col' class='px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider'>".$valeur["sect_livre"]."</td>
                <td scope='col' class='px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider'>".$valeur["edition_livre"]."</td>
                <td scope='col' class='px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider'>".$valeur["auteur_livre"]."</td>
                <td scope='col' class='px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider'><a href='modifierproduit.php?id=".$valeur["num_livre"]."'>Modifier</a></td>
                <td scope='col' class='px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider'><a href='supprime.php?id=".$valeur["num_livre"]."'>supprimer</a></td>
                </tr>";
                
            }
             echo "</table>";
            ?>
                
                <!-- Pagination -->
                <div class="flex items-center justify-between mt-6">
                    <div class="text-sm text-gray-500">
                        Affichage de <span id="books-start">1</span> à <span id="books-end">10</span> sur <span id="books-total">1248</span> livres
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 border rounded-lg bg-green-500 text-white">1</button>
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">2</button>
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">3</button>
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- History Page -->
        <div id="history-page" class="min-h-screen hidden">
            <!-- Sidebar (Same as Dashboard) -->
            <div class="sidebar bg-white shadow-lg fixed top-0 left-0 h-full w-64 z-50">
                <div class="flex items-center justify-between p-4 border-b">
                    <div class="flex items-center">
                        <img src="https://www.uac.bj/wp-content/uploads/2020/05/logo-uac-blanc.png" alt="UAC Logo" class="h-10">
                        <span class="logo-text ml-3 text-xl font-bold uac-text">FADESP Bibliothèque</span>
                    </div>
                    <button onclick="toggleSidebar()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                
                <nav class="mt-6">
                    <div class="px-4">
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-2" onclick="showDashboardPage()">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="nav-text ml-3 font-medium">Tableau de bord</span>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-2" onclick="showBooksPage('available')">
                            <i class="fas fa-book"></i>
                            <span class="nav-text ml-3 font-medium">Livres</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </div>
                        
                        <!-- Submenu for Books -->
                        <div class="pl-12 hidden" id="books-submenu-history">
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-1" onclick="showBooksPage('available')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres disponibles</span>
                            </div>
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="showBooksPage('reserved')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres réservés</span>
                            </div>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg uac-bg text-white mb-2">
                            <i class="fas fa-history"></i>
                            <span class="nav-text ml-3 font-medium">Historique</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </div>
                        
                        <!-- Submenu for History -->
                        <div class="pl-12" id="history-submenu-history">
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 mb-1" onclick="showHistoryPage('borrowed')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Entrées-sorties</span>
                            </div>
                            <div class="nav-item flex items-center py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="showHistoryPage('reserved')">
                                <i class="fas fa-circle text-xs"></i>
                                <span class="nav-text ml-3 text-sm">Livres réservés</span>
                            </div>
                        </div>
                        
                        <div class="nav-item flex items-center py-3 px-4 rounded-lg text-gray-600 hover:bg-gray-100" onclick="logout()">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-text ml-3 font-medium">Déconnexion</span>
                        </div>
                    </div>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="ml-64 p-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 id="history-page-title" class="text-3xl font-bold text-gray-800">Historique des Entrées-sorties</h1>
                        <p id="history-page-subtitle" class="text-gray-600">Liste complète des Entrées-sorties des étudiants</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" id="history-search" class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Rechercher...">
                        </div>
                        <div class="flex items-center space-x-2">
                            <label for="history-filter" class="text-sm text-gray-600">Filtrer par:</label>
                            <select id="history-filter" class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option value="all">Tous</option>
                                <option value="returned">Présents</option>
                                <option value="overdue">Absents</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- History Table -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="uac-bg">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Étudiant</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Couleur du sac</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Heure arrivée</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">....</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Statut</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="history-table-body" class="bg-white divide-y divide-gray-200">
                                <!-- History items will be dynamically inserted here -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="flex items-center justify-between mt-6">
                    <div class="text-sm text-gray-500">
                        Affichage de <span id="history-start">1</span> à <span id="history-end">10</span> sur <span id="history-total">342</span> entrées
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 border rounded-lg bg-green-500 text-white">1</button>
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">2</button>
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">3</button>
                        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add/Edit Book Modal -->
        <div id="book-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl">
                <div class="flex justify-between items-center border-b px-6 py-4">
                    <h3 id="book-modal-title" class="text-xl font-semibold">Ajouter un nouveau livre</h3>
                    <button onclick="hideModal('book-modal')" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                    <!-- Ajout livre-->
                <div class="p-6">
                    <form id="book-form" action="codeAjoutlivre.php" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="book-title" class="block text-sm font-medium text-gray-700 mb-1">Titre du livre</label>
                                <input name="titre" type="text" id="book-title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                            </div>
                            
                            <div>
                                <label for="book-category" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                                <select name="categorie" id="book-category" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="droit">Droit</option>
                                    <option value="science-politique">Science politique</option>
                                    <option value="economie">Économie</option>
                                    <option value="histoire">Histoire</option>
                                    <option value="philosophie">Philosophie</option>
                                </select>
                            </div>
                            <div>
                                <label for="book-section" class="block text-sm font-medium text-gray-700 mb-1">Section</label>
                                <select name="section" id="book-section" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="droit">Libres</option>
                                    <option value="science-politique">réservés</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="book-edition" class="block text-sm font-medium text-gray-700 mb-1">Edition</label>
                                <input name="edition" type="text" id="book-author" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                            </div>
                            
                            <div>
                                <label  for="book-autor" class="block text-sm font-medium text-gray-700 mb-1">Auteur</label>
                                <input name="auteur" type="text" id="book-isbn" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                            </div>
                            
                            
                            <div>
                                <label for="book-qte" class="block text-sm font-medium text-gray-700 mb-1">Quantité</label>
                                <input name="quantité" type="number" id="book-year" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                        </div>
                        <div>
                            <label for="book-rayon" class="block text-sm font-medium text-gray-700 mb-1">Rayon</label>
                            <select name="rayon" id="book-rayon" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                <option value="">Sélectionner...</option>
                                <option value="droit">Rayon 1</option>
                                <option value="science-politique">Rayon 2</option>
                                <option value="economie">Rayon 3</option>
                                <option value="histoire">Rayon 4</option>
                                <option value="philosophie">Rayon 5</option>
                            </select>
                        </div>
                    </form>
                </div>
                
                <div class="flex justify-end space-x-4 border-t px-6 py-4">
                    <button onclick="hideModal('book-modal')" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-50">
                        Annuler
                    </button>
                    <button name="btn" type="submit" form="book-form" class="uac-bg hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition">
                        Enregistrer
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Borrow Book Modal -->
        <div id="borrow-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl">
                <div class="flex justify-between items-center border-b px-6 py-4">
                    <h3 class="text-xl font-semibold">Enregistrer un emprunt</h3>
                    <button onclick="hideModal('borrow-modal')" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="p-6">
                    <form id="borrow-form">
                        <div class="mb-6">
                            <label for="borrow-student" class="block text-sm font-medium text-gray-700 mb-1">Étudiant *</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" id="borrow-student" class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Rechercher un étudiant..." required>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="borrow-book" class="block text-sm font-medium text-gray-700 mb-1">Livre *</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-book text-gray-400"></i>
                                </div>
                                <input type="text" id="borrow-book" class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Rechercher un livre..." required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="borrow-date" class="block text-sm font-medium text-gray-700 mb-1">Date d'emprunt *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-calendar text-gray-400"></i>
                                    </div>
                                    <input type="text" id="borrow-date" class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" value="Aujourd'hui" readonly>
                                </div>
                            </div>
                            
                            <div>
                                <label for="return-date" class="block text-sm font-medium text-gray-700 mb-1">Date de retour *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-calendar text-gray-400"></i>
                                    </div>
                                    <input type="date" id="return-date" class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <label for="borrow-notes" class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                            <textarea id="borrow-notes" rows="2" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                        </div>
                    </form>
                </div>
                
                <div class="flex justify-end space-x-4 border-t px-6 py-4">
                    <button onclick="hideModal('borrow-modal')" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-50">
                        Annuler
                    </button>
                    <button type="submit" form="borrow-form" class="uac-bg hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition">
                        Enregistrer l'emprunt
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample data for books
        const sampleBooks = [
            {
                id: 1,
                title: "Droit constitutionnel avancé",
                author: "Prof. Adanguidi",
                isbn: "978-2-13-058834-9",
                cover: "https://m.media-amazon.com/images/I/41JjZ5N5rVL._SY425_.jpg",
                available: true,
                copies: 5
            },
            {
                id: 2,
                title: "Introduction à la science politique",
                author: "Dr. Adékambi",
                isbn: "978-2-13-081787-6",
                cover: "https://m.media-amazon.com/images/I/41JjZ5N5rVL._SY425_.jpg",
                available: true,
                copies: 3
            },
            {
                id: 3,
                title: "Droit des affaires",
                author: "Prof. Lawson",
                isbn: "978-2-275-04444-4",
                cover: "https://m.media-amazon.com/images/I/41JjZ5N5rVL._SY425_.jpg",
                available: false,
                copies: 0
            },
            {
                id: 4,
                title: "Histoire du droit",
                author: "Prof. Johnson",
                isbn: "978-2-275-03333-2",
                cover: "https://m.media-amazon.com/images/I/41JjZ5N5rVL._SY425_.jpg",
                available: true,
                copies: 2
            },
            {
                id: 5,
                title: "Philosophie du droit",
                author: "Dr. Mensah",
                isbn: "978-2-275-02222-9",
                cover: "https://m.media-amazon.com/images/I/41JjZ5N5rVL._SY425_.jpg",
                available: true,
                copies: 4
            }
        ];

        // Sample data for history
        const sampleHistory = [
            {
                id: 1,
                student: "Kossi A.",
                book: "Introduction à la science politique",
                borrowDate: "2023-05-15",
                returnDate: "2023-06-15",
                status: "current",
                overdue: false
            },
            {
                id: 2,
                student: "M. Dossou",
                book: "Histoire du droit",
                borrowDate: "2023-04-10",
                returnDate: "2023-05-10",
                status: "overdue",
                overdue: true
            },
            {
                id: 3,
                student: "A. Gbedo",
                book: "Droit constitutionnel avancé",
                borrowDate: "2023-03-20",
                returnDate: "2023-04-20",
                status: "returned",
                overdue: false
            },
            {
                id: 4,
                student: "F. Agossa",
                book: "Philosophie du droit",
                borrowDate: "2023-06-01",
                returnDate: "2023-07-01",
                status: "current",
                overdue: false
            },
            {
                id: 5,
                student: "E. Zinsou",
                book: "Droit des affaires",
                borrowDate: "2023-02-15",
                returnDate: "2023-03-15",
                status: "returned",
                overdue: false
            }
        ];

        // Current view state
        let currentView = 'landing';
        let currentBooksFilter = 'available';
        let currentHistoryFilter = 'borrowed';

        // Initialize the app
        document.addEventListener('DOMContentLoaded', function() {
            // Set up event listeners
            document.getElementById('login-form').addEventListener('submit', function(e) {
                e.preventDefault();
                login();
            });
            
            document.getElementById('add-book-btn').addEventListener('click', function() {
                showModal('book-modal');
            });
            
            document.getElementById('book-search').addEventListener('input', function() {
                filterBooks();
            });
            
            document.getElementById('history-search').addEventListener('input', function() {
                filterHistory();
            });
            
            document.getElementById('history-filter').addEventListener('change', function() {
                filterHistory();
            });
           
            
            // Initialize submenu toggles
            const bookNavItems = document.querySelectorAll('.nav-item');
            bookNavItems.forEach(item => {
                if (item.querySelector('.fa-chevron-down')) {
                    item.addEventListener('click', function(e) {
                        if (e.target === this || e.target.classList.contains('nav-text') || e.target.classList.contains('fa-chevron-down')) {
                            const submenuId = this.getAttribute('onclick') ? 
                                this.getAttribute('onclick').includes('Books') ? 'books-submenu' : 'history-submenu' : 
                                '';
                            const submenu = document.getElementById(submenuId);
                            if (submenu) {
                                submenu.classList.toggle('hidden');
                                const icon = this.querySelector('.fa-chevron-down');
                                if (submenu.classList.contains('hidden')) {
                                    icon.classList.remove('fa-chevron-up');
                                    icon.classList.add('fa-chevron-down');
                                } else {
                                    icon.classList.remove('fa-chevron-down');
                                    icon.classList.add('fa-chevron-up');
                                }
                            }
                        }
                    });
                }
            });
            
            // Update time every second
            updateTime();
            setInterval(updateTime, 1000);
            
            // Load sample data
            loadBooks();
            loadHistory();
        });

        // Navigation functions
        function showLandingPage() {
            document.getElementById('landing-page').classList.remove('hidden');
            document.getElementById('login-page').classList.add('hidden');
            document.getElementById('dashboard-page').classList.add('hidden');
            document.getElementById('books-page').classList.add('hidden');
            document.getElementById('history-page').classList.add('hidden');
            currentView = 'landing';
        }

        function showLoginPage() {
            document.getElementById('landing-page').classList.add('hidden');
            document.getElementById('login-page').classList.remove('hidden');
            document.getElementById('dashboard-page').classList.add('hidden');
            document.getElementById('books-page').classList.add('hidden');
            document.getElementById('history-page').classList.add('hidden');
            currentView = 'login';
        }

        function showDashboardPage() {
            document.getElementById('landing-page').classList.add('hidden');
            document.getElementById('login-page').classList.add('hidden');
            document.getElementById('dashboard-page').classList.remove('hidden');
            document.getElementById('books-page').classList.add('hidden');
            document.getElementById('history-page').classList.add('hidden');
            currentView = 'dashboard';
        }


        function showBooksPage(filter) {
            document.getElementById('landing-page').classList.add('hidden');
            document.getElementById('login-page').classList.add('hidden');
            document.getElementById('dashboard-page').classList.add('hidden');
            document.getElementById('books-page').classList.remove('hidden');
            document.getElementById('history-page').classList.add('hidden');
            
            currentBooksFilter = filter;
            
            if (filter === 'available') {
                document.getElementById('books-page-title').textContent = 'Livres disponibles';
                document.getElementById('books-page-subtitle').textContent = 'Liste complète des livres disponibles à l\'emprunt';
            } else {
                document.getElementById('books-page-title').textContent = 'Livres réservés';
                document.getElementById('books-page-subtitle').textContent = 'Liste complète des livres actuellement réservés';
            }
            
            filterBooks();
            currentView = 'books';
        }

        function showHistoryPage(filter) {
            document.getElementById('landing-page').classList.add('hidden');
            document.getElementById('login-page').classList.add('hidden');
            document.getElementById('dashboard-page').classList.add('hidden');
            document.getElementById('books-page').classList.add('hidden');
            document.getElementById('history-page').classList.remove('hidden');
            
            currentHistoryFilter = filter;
            
            if (filter === 'borrowed') {
                document.getElementById('history-page-title').textContent = 'Historique des Entrées-sorties';
                document.getElementById('history-page-subtitle').textContent = 'Liste complète des entrées enregistrer
            } else {
                document.getElementById('history-page-title').textContent = 'Historique des réservations';
                document.getElementById('history-page-subtitle').textContent = 'Liste complète des livres réservés par les étudiants';
            }
            
            filterHistory();
            currentView = 'history';
        }

        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('sidebar-collapsed');
        }

        function showModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function hideModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        // Data functions
        function login() {
            // In a real app, you would validate credentials here
            showDashboardPage();
        }

        function logout() {
            showLandingPage();
        }

        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            document.getElementById('current-time').textContent = timeString;
        }

        function loadBooks() {
            fetch('getLivre.php')
          .then(response => response.json())
          .then(books => {
              const tbody = document.getElementById('books-tbody');
  
              books.forEach(book => {
                  const row = document.createElement('tr');
                  row.className = 'table-row hover:bg-gray-50';
  
                  row.innerHTML = `
                      <td class="px-6 py-4 whitespace-nowrap">${book.title}</td>
                      <td class="px-6 py-4 whitespace-nowrap">${book.category}</td>
                      <td class="px-6 py-4 whitespace-nowrap">${book.section}</td>
                      <td class="px-6 py-4 whitespace-nowrap">${book.edition}</td>
                      <td class="px-6 py-4 whitespace-nowrap">${book.author}</td>
                      <td class="px-6 py-4 whitespace-nowrap">${book.copies}</td>
                     
                  `;
  
                  tbody.appendChild(row);
              });
          })
          .catch(error => {
              console.error('Erreur lors du chargement des livres:', error);
          });
        }
                

        function loadHistory() {
            const tbody = document.getElementById('history-table-body');
            tbody.innerHTML = '';
            
            sampleHistory.forEach(item => {
                const row = document.createElement('tr');
                row.className = 'table-row hover:bg-gray-50';
                
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-user text-gray-600"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">${item.student}</div>
                                <div class="text-sm text-gray-500">${item.id}@fadesp.uac.bj</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">${item.book}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">${formatDate(item.borrowDate)}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">${formatDate(item.returnDate)}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        ${item.status === 'returned' ? 
                            `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Retourné
                            </span>` : 
                            item.overdue ? 
                            `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                En retard
                            </span>` :
                            `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                En cours
                            </span>`}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        ${item.status === 'returned' ? 
                            `<button class="text-gray-400 cursor-not-allowed mr-3">
                                <i class="fas fa-check-circle"></i>
                            </button>` : 
                            `<button class="text-green-600 hover:text-green-900 mr-3">
                                <i class="fas fa-check-circle"></i>
                            </button>`}
                        <button class="text-blue-600 hover:text-blue-900">
                            <i class="fas fa-eye"></i>
                        </button>
                    </td>
                `;
                
                tbody.appendChild(row);
            });
        }

        function filterBooks() {
            const searchTerm = document.getElementById('book-search').value.toLowerCase();
            const rows = document.querySelectorAll('#books-table-body tr');
            
            rows.forEach(row => {
                const title = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const author = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const isbn = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || author.includes(searchTerm) || isbn.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        function filterHistory() {
            const searchTerm = document.getElementById('history-search').value.toLowerCase();
            const filterValue = document.getElementById('history-filter').value;
            const rows = document.querySelectorAll('#history-table-body tr');
            
            rows.forEach(row => {
                const student = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                const book = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const status = row.querySelector('td:nth-child(5) span').textContent.toLowerCase();
                
                const matchesSearch = student.includes(searchTerm) || book.includes(searchTerm);
                let matchesFilter = true;
                
                if (filterValue === 'returned') {
                    matchesFilter = status.includes('retourné');
                } else if (filterValue === 'overdue') {
                    matchesFilter = status.includes('retard');
                } else if (filterValue === 'current') {
                    matchesFilter = status.includes('cours');
                }
                
                if (matchesSearch && matchesFilter) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            return new Date(dateString).toLocaleDateString('fr-FR', options);
        }
    </script>
</body>
</html>