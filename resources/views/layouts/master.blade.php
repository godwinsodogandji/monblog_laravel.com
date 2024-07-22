<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Mon Blog Laravel')
    </title>
</head>

<body>
    <h1>Mon Blog Laravel</h1>
    <header>
        <nav>
            <ul>
                <li><a href="/contact-us">Contactez-nous</a></li>
                <li> <a href="/about">A propos</a></li>
                <li> <a href="/articles">Articles</a></li>
            </ul>
        </nav>
    </header>

    {{-- Contenu de toutes les pages ici --}}
    @yield('contenu')



</body>

</html>
