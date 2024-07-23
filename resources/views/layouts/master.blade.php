<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Ajout de bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>
        @yield('title', 'Mon Blog Laravel')
    </title>
</head>

<body>


    {{-- Ajout du script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <h2> <a class="navbar-brand" href="/">Mon Blog Laravel</a></h2>
                    <a class="navbar-brand" href="/contact-us">Contactez-nous</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/about">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/articles">Articles</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </nav>



    <main class="container mt-4">
        {{-- Contenu de toutes les pages ici --}}
        @yield('contenu')
    </main>
</body>

</html>
