@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="background-color: #FF90BB;">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ url('/sekolah') }}">Sekolah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ url('/kursus') }}">Kursus</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title text-center text-light">
                            Selamat datang Di <strong>{{ config('app.name', 'Laravel') }}</strong>
                        </h5>
                        <p class="text-center text-decoration-none text-light ">
                            Selamat Datang {{ Auth::user()->name }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <header>
            <img src="{{ asset('image/header.jpg') }}" alt="">
        </header>
        <nav>
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/kursus') }}">Kursus</a></li>
                <li><a href="{{ url('/sekolah') }}">Sekolah</a></li>
            </ul>

        </nav>

        <main>
            <section>
                <h2>Selamat Datang Di Sistem Informasi Pendaftaran Pelatihan Komputer</h2>
            </section>
        </main>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/srh7.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/srh1.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/srh10.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <div class="kotak-footer">
            <footer>
                Copyright &copy; 2022. Designed by Mrs. Nisa
            </footer>
        </div>

    </div>
@endsection
