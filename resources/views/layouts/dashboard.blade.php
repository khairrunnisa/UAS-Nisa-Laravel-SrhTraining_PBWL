<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <aside>

        <header>
            <img src="{{ asset('image/logo.jpeg') }}" class="brand">
            <div class="user text-dark fw-bold">SRH Training Admin</div>
        </header>

        <nav>
            <ul>
                <li>
                    <a href="{{ url('/program') }}" style="text-decoration: none !important;" class="text-dark fw-bold">
                        <img class="icon" src="{{ asset('image/home.png') }}" alt="">Program
                    </a>
                </li>
                <li>
                    <a href="{{ url('/kursus') }}" style="text-decoration: none !important;" class="text-dark fw-bold">
                        <img class="icon" src="{{ asset('image/kursus.png') }}" alt=""> Data Kursus
                    </a>
                </li>
                <li>
                    <a href="{{ url('/sekolah') }}" style="text-decoration: none !important;" class="text-dark fw-bold">
                        <img class="icon" src="{{ asset('image/sekolah.png') }}" alt=""> Data Sekolah
                    </a>
                </li>
                <li>
                    <a href="{{ url('/kontak') }}" style="text-decoration: none !important;" class="text-dark fw-bold">
                        <img class="icon" src="{{ asset('image/sekolah.png') }}" alt=""> Kontak
                    </a>
                </li>

            </ul>
        </nav>

    </aside>

</body>

</html>
