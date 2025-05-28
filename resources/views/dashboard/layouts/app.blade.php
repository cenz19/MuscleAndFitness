<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | @yield('pageName')</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --primary-color: #ff6600;
            --sidebar-bg: #f4f4f4;
            --sidebar-width: 250px;
            --transition-speed: 0.3s;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            min-height: 100vh;
        }

        #sidebar {
            width: var(--sidebar-width);
            background-color: var(--sidebar-bg);
            height: 100vh;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
        }

        #sidebar .logo {
            text-align: center;
            margin-bottom: 2rem;
        }

        #sidebar .logo img {
            width: 100px;
        }

        #sidebar h3 {
            text-align: center;
            margin-top: 0.5rem;
        }

        .nav-links {
            list-style: none;
        }

        .nav-links li {
            margin-bottom: 1rem;
        }

        .nav-links li a {
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: background-color var(--transition-speed);
        }

        .nav-links li a:hover,
        .nav-links li.active a {
            background-color: var(--primary-color);
            color: white;
        }

        #main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            padding: 1rem;
            display: flex;
            justify-content: flex-end;
            border-bottom: 1px solid #ddd;
        }

        .logout-button {
            background-color: transparent;
            border: 2px solid var(--primary-color);
            padding: 0.5rem 1rem;
            color: var(--primary-color);
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .logout-button:hover {
            background-color: var(--primary-color);
            color: white;
        }

        #main-app {
            padding: 2rem;
        }
    </style>
    @yield('style')
</head>
<body>

    <aside id="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <h3>Dashboard Admin</h3>
        </div>
        <ul class="nav-links">
            <li class="@yield('isProgram')">
                <a href="{{ route('dashboard.index') }}">
                    <i class="fas fa-layer-group"></i> &nbsp; Program
                </a>
            </li>
            <li class="@yield('isExercise')">
                <a href="{{ route('exercise.index') }}">
                    <i class="fas fa-dumbbell"></i> &nbsp; Exercise
                </a>
            </li>
        </ul>
    </aside>

    <main id="main-content">
        <nav class="navbar">
            <form action="{{ route('logout') }}" method="GET">
                @csrf
                <input type="submit" class="logout-button" value="LOGOUT">
            </form>
        </nav>

        <section id="main-app">
            @yield('content')
        </section>
    </main>

    @yield('script')
</body>
</html>
