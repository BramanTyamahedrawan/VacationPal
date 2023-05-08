@extends('layouts_tiket.app_pesan_tiket')

@section('title', 'Cek Ketersediaan Tiket')

@section('cek_tiket')
    @parent
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-2 py-2">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-md-center">Tiket</h3><br>
                                        <p class="text-muted">Jumlah kunjungan ke Pantai Tiga Warna dibatasi setiap
                                            harinya
                                            yakni hanya 100 orang saja. Hal itu dilakukan sebagai upaya konservasi di
                                            kawasan Pantai Tiga Warna. </p><br>
                                        <a href="{{ route('pesan_tiket') }}"><button
                                                class="btn btn-outline-info btn-lg btn-block">
                                                <i class="mdi mdi-ticket-confirmation"></i>Tiket
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
