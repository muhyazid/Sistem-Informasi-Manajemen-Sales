<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') Santara </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Cari..." aria-label="Search"
                            name="search">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>

                <ul class="navbar-nav navbar-right">
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    </div>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" method="POST">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            @include('layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h4>@yield('sub-title')</h4>
                    </div>
                    @yield('content')
                </section>
            </div>

            <script>
                // Fungsi untuk mengambil waktu saat ini
                function showDateTime() {
                    const now = new Date();
                    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                        'Oktober', 'November', 'Desember'
                    ];
                    const day = days[now.getDay()];
                    const date = now.getDate();
                    const month = months[now.getMonth()];
                    const year = now.getFullYear();
                    const hours = now.getHours();
                    const minutes = now.getMinutes();
                    const seconds = now.getSeconds();

                    // Menampilkan waktu saat ini dalam format yang diinginkan
                    const dateTime = `${day}, ${date} ${month} ${year} ${hours}:${minutes}:${seconds}`;
                    document.getElementById('datetime').innerHTML = dateTime;

                    // Mengulangi fungsi setiap 1 detik
                    setTimeout(showDateTime, 1000);
                }

                showDateTime(); // Memanggil fungsi saat halaman dimuat
            </script>

            <!-- jQuery Library -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    // Merekam klik pada elemen sidebar
                    $(".sidebar a").click(function(e) {
                        e.preventDefault(); // Mencegah halaman pindah ke URL yang ditentukan

                        // Menghapus kelas "active" dari semua elemen navbar
                        $(".navbar a").removeClass("active");

                        // Menambahkan kelas "active" pada elemen navbar yang sesuai
                        var targetNavItem = $(this).attr("href");
                        $(".navbar a[href='" + targetNavItem + "']").addClass("active");
                    });
                });
            </script>

            <script>
                // Fungsi untuk menangani submit form pencarian
                document.querySelector('form.form-inline').addEventListener('submit', function(event) {
                    event.preventDefault(); // Mencegah form untuk langsung melakukan submit

                    const searchInput = document.querySelector('input[name="search"]')
                        .value; // Mengambil nilai input pencarian

                    // Mengarahkan pengguna ke halaman pencarian dengan nilai pencarian sebagai parameter
                    window.location.href = '/search?q=' + encodeURIComponent(searchInput);
                });
            </script>


            <script>
                // Mengubah judul tab berdasarkan halaman yang diklik
                function changePageTitle(pageTitle) {
                    document.title = pageTitle + ' - Santara';
                }

                // Menangani klik pada elemen sidebar
                const sidebarLinks = document.querySelectorAll('.sidebar-nav a');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const pageTitle = this.getAttribute('data-title');
                        changePageTitle(pageTitle);
                        // Jika Anda juga ingin menandai item sidebar yang aktif, Anda dapat menambahkan logika di sini
                    });
                });
            </script>

            <script src="assets/js/scripts.js"></script>




            @include('layouts.footer')
