@extends('layouts.frontend.master')

@section('title')
    Selamat Datang di Website My Fashion POS
@endsection

@section('content')
    <!-- header caraousel -->
    <header>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/Pos2.jpg') }}"
                            class="d-block w-100 shadow-nih" alt="..." width="250" height="550">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/dashboard.jpeg') }}"
                            class="d-block w-100 shadow-nih" alt="..." width="250" height="550">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- start main -->
    <main>
        <div class="container">
            <!-- start section -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <h2 class="text-success">Recomended Layanan</h2>
                    </div>
                    <button class="btn btn-primary lihat d-none d-md-block">
                        <i class="fas fa-list me-1"></i> Lebih
                    </button>
                </div>

                <div class="row justify-content-center" id="list-product">
                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img src="{{ asset('img/pos1.png') }}" class="img-fluid mb-3 rounded-20" alt="">
                                <div class="topic">
                                    <h3>Mulai dengan My Fashion</h3>
                                    <p>Aplikasi web ini merchant dengan mudah menambah produk, menghapus produk, dan lain-lain</p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="text-center mt-4 d-md-none d-lg-none d-xl-none">
                    <button class="btn btn-primary lihat">
                        <i class="fas fa-list me-1"></i> Lebih lagi
                    </button>
                </div>
            </section>
            <!-- end section list product -->
        </div>
    </main>
    <!-- end main -->
@endsection
