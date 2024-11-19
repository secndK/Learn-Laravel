
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Ajout d'une feuille de style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- En-tête commun -->
    <header>
        <h1>Mon Super Site 🚀</h1>
        <nav>
            <a href="/home">Accueil</a>
            <a href="/about">À propos</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <!-- Contenu spécifique aux pages -->
    <main>
        @yield('content')
    </main>

    <!-- Pied de page commun -->
    <footer>
        <p>© 2024 - Tous droits réservés</p>
    </footer>
</body>
</html>

