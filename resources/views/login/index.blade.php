<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f2f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: block;
            margin: 0 auto 1.5rem auto;
            width: 100px;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
        }

        .btn-submit {
            width: 100%;
            padding: 0.75rem;
            background-color: #1d4ed8;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #1e40af;
        }

        .alert {
            background-color: #fee2e2;
            color: #b91c1c;
            padding: 0.75rem 1rem;
            margin-bottom: 1.25rem;
            border-left: 5px solid #dc2626;
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        @if ($errors->has('error_message'))
            <div class="alert">
                <strong>Error:</strong> {{ $errors->first('error_message') }}
            </div>
        @endif

        <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required />
            </div>

            <button type="submit" class="btn-submit">LOGIN</button>
        </form>
    </div>

</body>
</html>
