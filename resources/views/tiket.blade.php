@extends('layouts_tiket.app_tiket')

@section('title', 'Tiketku')

@section('booking')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Booking Tiket</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat </th>
                                <th>No. Telepon</th>
                                <th>Tgl Kedatangan</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Batal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userTikets as $userTiket)
                                <tr onclick="window.location='{{ route('detail.show', ['id' => $userTiket->id]) }}'">
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
                                            <label class="badge badge-warning">Bayar Ditempat</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($userTiket->status != 'Dibatalkan')
                                            <form action="{{ route('batal') }}" method="GET">
                                                @csrf
                                                <input type="hidden" name="tiket_id" value="{{ $userTiket->id }}">
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
