<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #644961">
        <div class="container-fluid" style="background-color: #644961; ">
            <ul class="navbar-nav mb-2 mb-md-0 fs-5" style="padding-right: 5rem;">
                <li class="nav-item">
                    <a class="nav-link text-light fw-semibold" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fw-semibold" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fw-semibold" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

