<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parlemen | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Root/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Root/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-icons/font/bootstrap-icons.css') }}">
    @yield('plugins')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary-subtle shadow-lg sticky-top py-2">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Parlemen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item m-0">
                        <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item m-0">
                        <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item m-0">
                        <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item m-0">
                        <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item m-0 d-lg-block d-none">
                        <a class="nav-link" href="javascript:void(0)" onclick="searchField()"><i
                                class="bi bi-search fs-6"></i></a>
                    </li>
                    <li class="nav-item m-0 p-0 d-lg-none d-md-block d-sm-block">
                        <div class="nav-link">
                            <form action="/search" class="w-100 position-relative">
                                @csrf
                                <i class="bi bi-search fs-6 position-absolute translate-middle top-50 ms-4"></i>
                                <input type="text" class="form-control rounded-4 w-full text-center" placeholder="Cari Apapun...">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="fixed-top mt-5 w-100 bg-primary-subtle shadow-lg d-none" id="searchWrapper">
        <div class="container d-flex justify-content-center p-3">
            <form action="/search" class="w-75 position-relative">
                @csrf
                <i class="bi bi-search fs-6 position-absolute translate-middle top-50 ms-4"></i>
                <input type="text" class="form-control rounded-4 w-full text-center" placeholder="Cari Apapun...">
            </form>
        </div>
    </div>
    {{-- @yield('content') --}}
    <div class="min-vh-100 mt-3 mb-5">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <footer class="bg-primary-subtle mb-0 w-100 d-flex justify-content-center align-items-center">
        <div class="d-block">
            <div class="d-inline-block row gap-3 my-2">
                <a href="" class="fw-bold text-decoration-none text-dark">
                    Tentang Kami
                </a>
                |
                <a href="" class="fw-bold text-decoration-none text-dark">
                    Redaksi
                </a>
                |
                <a href="" class="fw-bold text-decoration-none text-dark">
                    Kontak
                </a>
            </div>
            <div class="text-center">
                <p>&copy; <span id="thisYear"></span> <span class="fw-bold">Parlemen</span> All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/plugins/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-3.7.1.min.js') }}"></script>
    @stack('scripts')
    <script>
        const year = new Date().getFullYear();
        const yearTextEl = document.getElementById('thisYear');
        yearTextEl.append(year);

        function searchField(){
            $('#searchWrapper').toggleClass('d-none');
        }


        $(window).on('resize', function(){
            if($(window).width() <= 1000)
            {
                $('#searchWrapper').addClass('d-none');
            }
        });

    </script>
</body>

</html>
