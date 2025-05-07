<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin | @yield('pageName')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .btn-outline {
            border-color: #ff6600;
            color: #ff6600;
        }

        .btn:active {
            background-color: #ff6600;
            color: white;
        }

        .list-group {
            border-radius: 0;
        }

        .list-group-item {
            border: none !important;
        }

        .btn-solid {
            background-color: #ff6600;
            color: white;
        }

        a {
            color: black;
            text-decoration: none;
        }

        .active {
            background-color: #ff6600 !important;
            border-color: #ff6600 !important;
        }

        #sidebar {
            height: 100vh;
        }

        .list-group-item.active a,
        .list-group-item.active a h4 {
            color: white !important;
        }

    </style>
    @yield('style')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-0">
                <div id="sidebar" class="w-100">
                    <div class="d-flex align-items-center p-3">
                        <img src="{{ asset('images') }}/logo.png" width="100px" alt="">
                        <h3 class="ms-5">Dashboard Admin</h3>
                    </div>

                    <ul class="list-group">
                        <li id="program" class="list-group-item @yield('isProgram')" aria-current="true">
                            <a href="{{ route('dashboard.index') }}">
                                <h4>PROGRAM</h4>
                            </a>

                        </li>
                        <li id="exercise" class="list-group-item @yield('isExercise')">
                            <a href="{{ route('exercise.index') }}">
                                <h4>EXERCISE</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9 px-0">
                <nav class="navbar pt-2 w-100 d-flex flex-row-reverse">
                    <form action="{{route('logout')}}" method="GET" class="me-3">
                        @csrf
                        <input type="submit" class="btn btn-outline" id="logout-button" value="LOGOUT">
                    </form>
                </nav>
                <div id="main-app" class="container pt-3">
                    @yield('content')
                </div>

            </div>
        </div>
        {{-- navbar --}}

    </div>

    </div>
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
