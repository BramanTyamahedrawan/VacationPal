@extends('layouts_tiket.app_tiket')

@section('title', 'Tiketku')

@section('booking')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Booking Tiket</h4>
                </p>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userTikets as $userTiket)
                                <tr>
                                    <td> {{ $userTiket->id }} </td>
                                    <td> {{ $userTiket->nama }} </td>
                                    <td> {{ $userTiket->email }} </td>
                                    <td> {{ $userTiket->jenis_kelamin }} </td>
                                    <td> {{ $userTiket->alamat }} </td>
                                    <td> {{ $userTiket->no_hp }} </td>
                                    <td> {{ $userTiket->tanggal_kedatangan }} </td>
                                    <td> {{ $userTiket->harga }} </td>
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
