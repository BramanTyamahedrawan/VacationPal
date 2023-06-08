@extends('layouts_tiket.app_tiket')

@section('title', 'Detail Tiket')

@section('detail')
    @parent
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Booking Tiket</h4>
                <div class="table-responsive">
                    <form action="{{ route('pembayaran.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $tiket->id }}">
                        <input type="hidden" name="nama" value="{{ $tiket->nama }}">
                        <input type="hidden" name="email" value="{{ $tiket->email }}">
                        <input type="hidden" name="jenis_kelamin" value="{{ $tiket->jenis_kelamin }}">
                        <input type="hidden" name="alamat" value="{{ $tiket->alamat }}">
                        <input type="hidden" name="no_hp" value="{{ $tiket->no_hp }}">
                        <input type="hidden" name="tanggal_kedatangan" value="{{ $tiket->tanggal_kedatangan }}">
                        <input type="hidden" name="jumlah_tiket" value="{{ $tiket->jumlah_tiket }}">
                        <input type="hidden" name="harga" value="{{ $tiket->harga }}">
                        <input type="hidden" name="status" value="{{ $tiket->status }}">
                        <table class="table table-stripped" style="color: rgb(233, 232, 232)">
                            <thead>
                                <tr>
                                    <th style="color:turquoise">Detail Tiket</th>
                                    <th style="color:turquoise">Data Tiket</th>
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
                                    <td>: {{ $tiket->jumlah_tiket }}</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>: {{ $tiket->harga }}</td>
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
                                <tr>
                                    <td>
                                        @if ($tiket->status == 'Lunas')
                                            <label class="badge badge-success">Lunas</label>
                                        @elseif ($tiket->status == 'Bayar Ditempat')
                                            <button type="submit" class="btn btn-primary">Bayar Tiket</button>
                                        @endif
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
