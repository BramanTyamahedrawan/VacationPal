@extends('layouts_tiket.app_tiket')

@section('title', 'Detail Tiket')

@section('detail')
    @parent
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Booking Tiket</h4>
                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td>{{ $tiket->id }}</td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ $tiket->nama }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $tiket->email }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $tiket->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $tiket->alamat }}</td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td>{{ $tiket->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Kedatangan</td>
                        <td>:</td>
                        <td>{{ $tiket->tanggal_kedatangan }}</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>{{ $tiket->harga }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            @if ($tiket->status == 'Lunas')
                                <label class="badge badge-success">Lunas</label>
                            @elseif ($tiket->status == 'Bayar Ditempat')
                                <label class="badge badge-warning">Bayar Ditempat</label>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
