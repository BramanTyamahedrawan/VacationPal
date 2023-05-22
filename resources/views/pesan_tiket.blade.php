@extends('layouts_tiket.app_pesan_tiket')

@section('title', 'Pesan Tiket')

@section('pesan_tiket')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-8 mx-auto">
                        <div class="card-body px-5 py-5">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-warning">
                                        <div class="card-header">
                                            <h3 class="card-title text-center">Informasi Tiket</h3>
                                            <p class="text-muted">Jumlah kunjungan ke Pantai Tiga Warna memiliki batasan
                                                yaitu
                                                setiap harinya dibatasi hanya 100 orang pengunjung. Hal itu dilakukan
                                                sebagai upaya konservasi di
                                                kawasan Pantai Tiga Warna. </p><br>
                                        </div>
                                        <button class="btn btn-info btn-block mt-3" type="button" data-toggle="collapse"
                                            data-target="#penggunaanLayanan" aria-expanded="false"
                                            aria-controls="penggunaanLayanan">
                                            Pemesanan Tiket
                                        </button>
                                        <div class="collapse mt-3 " id="penggunaanLayanan">
                                            <div class="card-body">
                                                <h3 class="card-title text-center">Pesan Tiket Anda</h3>
                                                <form class="forms-sample" method="POST"
                                                    action="{{ route('pesan_tiket.store') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="exampleInputName1"
                                                            placeholder="Nama Lengkap" name="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail3">Alamat Email</label>
                                                        @if (Auth::check())
                                                            <input type="email" class="form-control"
                                                                id="exampleInputEmail3" placeholder="Email" name="email"
                                                                value="{{ Auth::user()->email }}" readonly>
                                                        @endif
                                                        {{-- <input type="email" class="form-control" id="exampleInputEmail3"
                                                            placeholder="Email" name="email"> --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <select class="js-example-basic-single" style="width:100%"
                                                            name="jenis_kelamin">
                                                            <option value="0">Pilih Jenis Kelamin</option>
                                                            <option value="Laki-laki">Laki-Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputAlamat">Alamat Lengkap</label>
                                                        <input type="text" class="form-control" id="exampleInputAlamat"
                                                            placeholder="Alamat Anda" name="alamat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputNoHp">No. Handphone</label>
                                                        <input type="number" class="form-control" id="exampleInputNoHp"
                                                            placeholder="No. Handphone" name="no_hp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputDate1">Tanggal Kedatangan</label>
                                                        <input type="date" class="form-control" id="exampleInputDate1"
                                                            name="tanggal_kedatangan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga">Harga</label>
                                                        <input type="number"
                                                            class="form-control form-control-secondary bg-dark"
                                                            id="harga" name="harga" value="10000" readonly>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-2" name="status"
                                                        value="Bayar Ditempat">Pesan</button>
                                                    <a href="{{ route('home') }}" class="btn btn-outline-info">Batal</a>
                                                </form>
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
