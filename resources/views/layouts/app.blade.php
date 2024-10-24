<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title> <!-- Default Title if not set -->
</head>
<body>
    @yield("content")
</body>
</html>
=======
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-DyZvKtXhAszSTqH5qZplN4NAX1OlgNQeP52eVPLTT2SH3c3OgITMDzgtAnF7tA1t" crossorigin="anonymous">
    <title>Mon application Laravel</title>
</head>
<body>
    <header>
        <h1>Mon site</h1>
        <nav>
            </nav>
    </header>

    @yield('content')

    <footer>
        &copy; 2023 Tous droits réservés.
    </footer>
</body>
</html>
>>>>>>> origin/main
