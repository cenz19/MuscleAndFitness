<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle & Fitness</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #1c1c1c;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            color: #ff6600; /* Oranye gelap */
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .navbar li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        .navbar li a:hover {
            color: #ff6600;
        }

        /* Main Content */
        .content {
            padding: 40px 20px;
            text-align: center;
        }

        /* Footer */
        .footer {
            background-color: #1c1c1c;
            color: #bbb;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="#" class="logo">Muscle & Fitness</a>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/program">Program</a></li>
            <li><a href="/exercise">Exercise</a></li>
            <li><a href="/supporting-factors">Supporting Factors</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Muscle & Fitness. All rights reserved.</p>
    </footer>
</body>
</html>
