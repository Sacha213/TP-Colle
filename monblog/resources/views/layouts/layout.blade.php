<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/monblog.css">
    <title>
        @yield('titrePage')
    </title>
</head>

<body id="global">
    <header id="titreBlog">
        @yield('titreItem')
    </header>

    <div id="contenu">
    @yield('contenu')
    </div>
    

    <footer class="footer" id="piedBlog">
        Monblog - copyright 3AInfo - 2022
    </footer>
    
</body>

</html>