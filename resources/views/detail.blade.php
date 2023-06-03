@extends('layouts_tiket.app_tiket')

@section('title', 'Detail Tiket')

@section('detail')
    @parent
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Booking Tiket</h4>
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
                            <tr>
                                <td>QR Code</td>
                                <td> {!! DNS2D::getBarcodeHTML(json_encode($tiket, JSON_PRETTY_PRINT), 'QRCODE', 3, 3, 'white') !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
