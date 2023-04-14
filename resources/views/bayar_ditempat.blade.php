@extends('layouts_tiket.app_bayar_ditempat')

@section('bayar_ditempat')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bayar Ditempat</h4>
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
                                <td> 2 </td>
                                <td> Messsy Adam </td>
                                <td> messy@gmail.com </td>
                                <td> L </td>
                                <td> Jakarta </td>
                                <td> 08123456789 </td>
                                <td><label class="badge badge-warning">Bayar Ditempat</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
