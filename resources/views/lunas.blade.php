@extends('layouts_tiket.app_tiket')

@section('title', 'Tiketku Lunas')

@section('lunas')
    @parent
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sudah Bayar</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered" style="color: rgb(233, 232, 232)">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Lengkap </th>
                                <th> Alamat Email </th>
                                {{-- <th> Jenis Kelamin </th>
                                <th> Alamat Lengkap </th>
                                <th> No. Telepon </th> --}}
                                <th> Tanggal Kedatangan </th>
                                <th> Tiket </th>
                                <th> Harga </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userTikets as $userTiket)
                                <tr onclick="window.location='{{ route('detail.show', ['id' => $userTiket->id]) }}'">
                                    <td>{{ $userTiket->id }}</td>
                                    <td>{{ $userTiket->nama }}</td>
                                    <td>{{ $userTiket->email }}</td>
                                    {{-- <td>{{ $userTiket->jenis_kelamin }}</td>
                                    <td>{{ $userTiket->alamat }}</td>
                                    <td>{{ $userTiket->no_hp }}</td> --}}
                                    <td>{{ $userTiket->tanggal_kedatangan }}</td>
                                    <td>{{ $userTiket->jumlah_tiket }}</td>
                                    <td>{{ $userTiket->harga }}</td>
                                    <td>
                                        @if ($userTiket->status == 'Lunas')
                                            <label class="badge badge-success">Lunas</label>
                                        @elseif ($userTiket->status == 'Bayar Ditempat')
                                            <label class="badge badge-warning">Bayar Ditempat</label>
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
