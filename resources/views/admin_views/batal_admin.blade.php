@extends('layouts_admin.app')

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
                                            <table class="table table-bordered" style="color: rgb(233, 232, 232)">
                                                <thead>
                                                    <tr>
                                                        <th> No </th>
                                                        <th> Nama Lengkap </th>
                                                        <th> Email </th>
                                                        {{-- <th> Jenis Kelamin </th>
                                                        <th> Alamat </th>
                                                        <th> No. Telepon </th> --}}
                                                        <th> Tgl Kedatangan </th>
                                                        <th> Tiket </th>
                                                        <th> Harga </th>
                                                        <th> Status </th>
                                                        <th> Hapus </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tiketDibatalkan as $tiket)
                                                        <tr>
                                                            <td>{{ $tiket->id }}</td>
                                                            <td>{{ $tiket->nama }}</td>
                                                            <td>{{ $tiket->email }}</td>
                                                            {{-- <td>{{ $tiket->jenis_kelamin }}</td>
                                                            <td>{{ $tiket->alamat }}</td>
                                                            <td>{{ $tiket->no_hp }}</td> --}}
                                                            <td>{{ $tiket->tanggal_kedatangan }}</td>
                                                            <td>{{ $tiket->jumlah_tiket }}</td>
                                                            <td>{{ $tiket->harga }}</td>
                                                            <td>
                                                                @if ($tiket->status == 'Lunas')
                                                                    <label class="badge badge-success">Lunas</label>
                                                                @elseif ($tiket->status == 'Bayar Ditempat')
                                                                    <label class="badge badge-warning">Bayar
                                                                        Ditempat</label>
                                                                @elseif ($tiket->status == 'Dibatalkan')
                                                                    <label class="badge badge-danger">Dibatalkan</label>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('batal_admin.destroy', $tiket->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus tiket ini?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-info btn-sm"
                                                                        type="submit">Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
