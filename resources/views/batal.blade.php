@extends('layouts_tiket.app_batal')

@section('batal')
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
                                <th> Email </th>
                                <th> Jenis Kelamin </th>
                                <th> Alamat </th>
                                <th> No. Telepon </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> Herman Beck </td>
                                <td> herman@gmail.com</td>
                                <td> L </td>
                                <td> Bandung </td>
                                <td> 08123456789 </td>
                                <td><label class="badge badge-danger">Batal</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
