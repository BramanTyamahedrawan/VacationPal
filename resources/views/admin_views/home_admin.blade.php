@extends('layouts_admin.app')

@section('content')
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
                                            <table class="table table-bordered" style="color: rgb(233, 232, 232)">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th> Nama Lengkap </th>
                                                        <th> Email </th>
                                                        <th> Jenis Kelamin </th>
                                                        <th> Alamat </th>
                                                        <th> No. Telepon </th>
                                                        <th> Tgl Kedatangan </th>
                                                        <th> Harga </th>
                                                        <th> Status </th>
                                                        <th>Batal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($userTikets)
                                                        @foreach ($userTikets as $userTiket)
                                                            <tr>
                                                                <td>{{ $userTiket->id }}</td>
                                                                <td>{{ $userTiket->nama }}</td>
                                                                <td>{{ $userTiket->email }}</td>
                                                                <td>{{ $userTiket->jenis_kelamin }}</td>
                                                                <td>{{ $userTiket->alamat }}</td>
                                                                <td>{{ $userTiket->no_hp }}</td>
                                                                <td>{{ $userTiket->tanggal_kedatangan }}</td>
                                                                <td>{{ $userTiket->harga }}</td>
                                                                <td>
                                                                    @if ($userTiket->status == 'Lunas')
                                                                        <label class="badge badge-success">Lunas</label>
                                                                    @elseif ($userTiket->status == 'Bayar Ditempat')
                                                                        <label class="badge badge-warning">Bayar
                                                                            Ditempat</label>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($userTiket->status != 'Dibatalkan')
                                                                        <form action="{{ route('batal_admin') }}"
                                                                            method="GET">
                                                                            @csrf
                                                                            <input type="hidden" name="tiket_id"
                                                                                value="{{ $userTiket->id }}">
                                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                                onclick="return confirm('Apakah Anda yakin ingin membatalkan tiket ini?')">Batal</button>
                                                                        </form>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endisset
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
