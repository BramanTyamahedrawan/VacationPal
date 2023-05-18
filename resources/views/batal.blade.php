@extends('layouts_tiket.app_tiket')

@section('title', 'Tiketku Batal')

@section('batal')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tiket Dibatalkan</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Lengkap </th>
                                <th> Alamat Email </th>
                                <th> Jenis Kelamin </th>
                                <th> Alamat Lengkap </th>
                                <th> No. Telepon </th>
                                <th> Tanggal Kedatangan </th>
                                <th> Harga </th>
                                <th> Status </th>
                                <th> Batal </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tiketDibatalkan as $tiket)
                                <tr>
                                    <td>{{ $tiket->id }}</td>
                                    <td>{{ $tiket->nama }}</td>
                                    <td>{{ $tiket->email }}</td>
                                    <td>{{ $tiket->jenis_kelamin }}</td>
                                    <td>{{ $tiket->alamat }}</td>
                                    <td>{{ $tiket->no_hp }}</td>
                                    <td>{{ $tiket->tanggal_kedatangan }}</td>
                                    <td>{{ $tiket->harga }}</td>
                                    <td>
                                        @if ($tiket->status == 'Lunas')
                                            <label class="badge badge-success">Lunas</label>
                                        @elseif ($tiket->status == 'Bayar Ditempat')
                                            <label class="badge badge-warning">Bayar Ditempat</label>
                                        @elseif ($tiket->status == 'Dibatalkan')
                                            <label class="badge badge-danger">Dibatalkan</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($tiket->status != 'Dibatalkan')
                                            <form action="{{ route('batal') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="tiket_id" value="{{ $tiket->id }}">
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin membatalkan tiket ini?')">Batal</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
