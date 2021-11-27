<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma super application</title>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
<header>Issou</header>

@isset($_SESSION['info'])
    <div>
        <strong>Information : </strong> {{$_SESSION['info']}}
    </div>
@endisset

<nav>
    <a href="/index.php">Home page</a>

    <a href="/index.php?action=page2">Page 2</a>

    @isset($_SESSION['id'])
        Bonjour  {{$_SESSION['login']}} <a href='index.php?action=deconnexion'>Deconnexion</a></li>
    @else
        <a href='index.php?action=login'>Login</a>
        <a href='index.php?action=signin'>Inscription</a>
    @endif
</nav>

<main class="container">
    @yield("content")
</main>

<footer>Le super pied</footer>
</body>
</html>
