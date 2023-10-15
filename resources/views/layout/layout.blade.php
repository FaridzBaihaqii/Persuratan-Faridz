<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @yield('header')

    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        /* Show it is fixed to the top */
        body {
            min-height: 75rem;
            padding-top: 5rem;
        }

        .bar{
            margin-left: -100px;
            color: #fff;
        }

        .bar2{
            margin-right: 0px;
            color: #fff;
        }

        .bar3{
            margin-right: 350px;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Persuratan Faridz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('dashboard/surat') }}">Halaman Utama</a>
                    </li>
                </ul>
                <ul class="nav justify-content-center">
                    @if (Auth::check() && Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link bar" href="{{ url('admin/user') }}">Manager User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bar2" href="{{ url('jenis/surat') }}">Jenis Surat</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link bar3" href="{{ url('transaksi/surat') }}">Transaksi Surat</a>
                    </li>
                </ul>
                <div>
                    <form class="d-flex pt-2">
                      <a class="btn btn-outline-danger" href="{{ url('logout') }}" tabindex="-1">Logout</a>
                    </form>
                </div>
        </div>
    </nav>

    <div class="container mt-3">
        @include('layout.flash-message')
        @yield('content')
    </div>
</body>
<footer>
    @yield('footer')
</footer>
<html>