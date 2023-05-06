@extends('layouts_user.app')

@section('carousel')
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('user_template/img/carousel-3.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <h1 class="display-1 mb-4 animated slideInDown">Pantai 3 Warna
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('user_template/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-1 mb-4 animated slideInDown">Pantai 3 Warna</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection

@section('about')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ asset('user_template/img/about-1.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang kami</p>
                    <h1 class="display-5 mb-4">Pantai 3 Warna Malang</h1>
                    <p class="mb-4">
                        Kabupaten Malang memiliki aneka tempat wisata yang beragam mulai dari pegunungan
                        hingga wisata pantai. Salah satu wisata pantai di Malang yang banyak dikunjungi wisatawan adalah
                        Pantai 3 Warna.
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Deskripsi</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Lokasi</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Harga</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <p class="mb-0">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5744.901536727792!2d112.67663673296389!3d-8.439488875114831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd601147042ed43%3A0x3d8b26de55357956!2sPantai%20Tiga%20Warna!5e0!3m2!1sid!2sid!4v1683266958659!5m2!1sid!2sid"
                                        width="580" height="400" style="border:0; position:center;"
                                        allowfullscreen=""loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>
                                    Terletak di Desa Sitiarjo, Kecamatan Sumber Manjing Wetan, Kabupaten Malang. Jarak
                                    tempuh menuju Pantai 3 Warna dari pusat Kota Malang sekitar 150 km atau sekitar 3 jam
                                    dengan kendaraan roda dua maupun roda empat.
                                </p>
                                <p>
                                    Rute Pantai 3 Warna dari wilayah Kota Malang, wisatawan dapat menuju ke
                                    Kecamatan Bululawang kemudian Kecamatan Turen dan langsung ke area Pantai Sendang Biru.
                                    Sesampainya arah Pantai Sendang Biru, ikuti arah ke Clungup Mangrove Conservation.
                                </p>
                                <p>
                                    Pantai Tiga Warna terletak di Kecamatan Sumber Manjing Wetan, Kabupaten
                                    Malang, Jawa Timur. Pantai ini memiliki gradasi yang terdiri dari tiga warna, yaitu
                                    biru, hijau, dan coklat kemerahan.
                                </p>
                                <p>
                                    Warna air laut yang berbeda-beda tersebut disebabkan oleh kedalaman air
                                    laut. Warna biru merupakan sisi yang paling dalam, hijau pada sisi yang dangkal serta
                                    coklat merupakan pada pasir pantai
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Harga tiket masuk Pantai 3 Warna adalah Rp 10 ribu per orang. Pengunjung diwajibkan
                                    menyewa pemandu wisata sebesar Rp 150 ribu untuk setiap rombongan yang berjumlah 5
                                    orang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('deskripsi')
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang VacationPal</p>
                    <h1 class="display-5 mb-4">VacationPal</h1>
                    <p class="mb-4">VacationPal bertujuan untuk memudahkan
                        pelanggan dalam melakukan pemesanan tiket secara online, sehingga pelanggan tidak
                        perlu lagi antri di loket tiket atau menghubungi call center
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="{{ route('pesan_tiket') }}">Pesan Tiket</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Efisiensi</h4>
                                        <p class="mb-3">Meningkatkan efisiensi dalam proses pemesanan tiket, dengan
                                            memberikan
                                            kemudahan dan kenyamanan bagi pengguna untuk memesan tiket secara online</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Jangkauan</h4>
                                        <p class="mb-3">Memperluas jangkauan pasar, dengan menyediakan layanan pemesanan
                                            tiket
                                            yang dapat diakses oleh orang-orang dari berbagai daerah dan negara.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Biaya</h4>
                                <p class="mb-3">Mengurangi biaya operasional dengan mengurangi waktu yang diperlukan
                                    untuk mengelola pemesanan tiket secara manual.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('fitur')
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Fitur Kami</p>
                <h1 class="display-5 mb-5">VacationPal</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Pesan Tiket</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Batal Tiket</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Pembayaran</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h3 class="mb-4">Pemesanan Tiket</h3>
                                    <p class="mb-4">Fitur ini memungkinkan pengguna untuk memilih tipe tiket,
                                        jumlah tiket yang ingin dibeli, serta tanggal dan waktu kunjungan ke pantai 3
                                        warna.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Terpercaya</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Aman</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Anti Ribet</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h3 class="mb-4">Pembatalan Tiket</h3>
                                    <p class="mb-4">Fitur ini memungkinkan pengguna untuk membatalkan
                                        pemesanan tiket yang telah dilakukan sebelum batas waktu yang ditentukan.
                                        Pengguna akan menerima pengembalian dana sesuai dengan kebijakan
                                        pembatalan yang berlaku</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Terpercaya</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Aman</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Anti Ribet</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h3 class="mb-4">Pembayaran</h3>
                                    <p class="mb-4">Fitur ini memungkinkan pengguna untuk melakukan pembayaran
                                        atas pemesanan tiket yang telah dipilih. Sistem akan mengarahkan pengguna ke
                                        halaman pembayaran yang sesuai dengan metode pembayaran yang dipilih oleh
                                        pengguna.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Terpercaya</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Aman</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Anti Ribet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
