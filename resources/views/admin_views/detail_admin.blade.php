@extends('layouts_admin.app')

@section('title', 'Detail Tiket')

@section('content')
    @parent
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{ asset('admin_template/template/assets/images/dashboard/Group126@2x.png') }}"
                                    class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h2 class="mb-1 mb-sm-0">Selamat Datang di Halaman Admin</h2>
                            </div>
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Booking Tiket</h4>
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table table-stripped">
                                                <thead>
                                                    <tr>
                                                        <th>Detail Tiket</th>
                                                        <th>Data Tiket</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>No</td>
                                                        <td>: {{ $tiket->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Lengkap</td>
                                                        <td>: {{ $tiket->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>: {{ $tiket->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td>: {{ $tiket->jenis_kelamin }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>: {{ $tiket->alamat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. Telepon</td>
                                                        <td>: {{ $tiket->no_hp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Kedatangan</td>
                                                        <td>: {{ $tiket->tanggal_kedatangan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Tiket</td>
                                                        <td>: <span id="jumlahTiket"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga</td>
                                                        <td id="harga">{{ $tiket->harga }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>
                                                            @if ($tiket->status == 'Lunas')
                                                                <label class="badge badge-success">Lunas</label>
                                                            @elseif ($tiket->status == 'Bayar Ditempat')
                                                                <label class="badge badge-warning">Bayar Ditempat</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
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
