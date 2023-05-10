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
                            <tr>
                                <td> 1 </td>
                                <td> John Richards </td>
                                <td> johnrichard@gmail.com </td>
                                <td> L </td>
                                <td> Surabaya </td>
                                <td> 08123456789 </td>
                                <td></td>
                                <td></td>
                                <td><label class="badge badge-success">Lunas</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
