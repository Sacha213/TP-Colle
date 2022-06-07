<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <title>
        @yield('titrePage')
    </title>
</head>

<body>
    <header>
        @yield('titreItem')
    </header>
    @yield('contenu')
    <footer class="footer">
        Monblog - copyright 3AInfo - 2022
    </footer>
    
</body>

</html>