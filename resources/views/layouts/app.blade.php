<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Muscle & Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 62.5%;
        }

        body {
            margin: 0;
            font-family: 'Bebas Neue', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            letter-spacing: 0.1rem;
        }

        h1 {
            font-size: 10rem;
        }

        h2 {
            font-size: 8rem;
        }

        h3 {
            font-size: 3rem;
            letter-spacing: 0.2rem;
        }

        p {
            font-size: 1.5rem;
            font-family: Helvetica;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #fff;
            padding: 2rem 6rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1rem solid #f1f1f1;
        }

        .navbar .logo {
            color: #ff6600;
            font-size: 2rem;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 3rem;
        }

        .navbar li a {
            color: #1c1c1c;
            text-decoration: none;
            font-size: 2rem;
        }

        .navbar li a:hover {
            color: #ff6600;
        }

        .btn {
            background-color: #ff6600;
            color: #fff;
            padding: 1.5rem 3rem;
            text-decoration: none;
            font-size: 2rem;
            border-radius: 0.5rem;
            display: inline-block;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #e65c00;
        }

        /* Footer */
        .footer {
            background-color: #1c1c1c;
            color: #bbb;
            margin-top: 7rem;
            padding: 3rem 6rem;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer .logo img {
            height: 50px;
        }

        .footer ul {
            list-style: none;
            display: flex;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .footer li a {
            color: #bbb;
            text-decoration: none;
            font-size: 1.6rem;
        }

        .footer li a:hover {
            color: #ff6600;
        }

        .footer p {
            width: 100%;
            text-align: center;
            margin-top: 12rem;
            font-size: 1.4rem;
        }
    </style>
    @yield('css')
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="#" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Muscle & Fitness Logo" style="height:50px;">
        </a>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="{{route('program')}}">Program</a></li>
            <li><a href="{{route('exercise.user.index')}}">Exercise</a></li>
            <li><a href="/supporting-factors">Supporting Factors</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Muscle & Fitness Logo">
        </div>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/program">Program</a></li>
            <li><a href="/exercise">Exercise</a></li>
            <li><a href="/supporting-factors">Supporting Factors</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
        <p class="copyright">&copy; 2025 Muscle & Fitness. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('script')
</body>

</html>
