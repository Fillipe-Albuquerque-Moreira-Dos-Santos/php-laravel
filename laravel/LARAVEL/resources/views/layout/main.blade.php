<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield ('title')</title>

    <!-- fonte do google -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- css do bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<link rel="stylesheet" href="/css/style.css">

<script src="/js/script.js"></script>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">


                <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" alt="logo">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>

                    </li>

                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>

                    </li>

                    @auth

                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus eventos</a>

                        </li>

                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class= "nav-link" onclick="event.preventDefault();this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        </li>

                    @endauth

                    @guest

                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>

                        </li>

                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>

                        </li>

                    @endguest

                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <p>SISTEMA DE EVENTOS &copy; 2022</p>
    </footer>

</body>

</html>
