@extends('layouts_tiket.app_lunas')

@section('lunas')
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
                                <th> Email </th>
                                <th> Jenis Kelamin </th>
                                <th> Alamat </th>
                                <th> No. Telepon </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 3 </td>
                                <td> John Richards </td>
                                <td> johnrichard@gmail.com </td>
                                <td> L </td>
                                <td> Surabaya </td>
                                <td> 08123456789 </td>
                                <td><label class="badge badge-success">Lunas</label></td>
                            </tr>
                            <tr>
                                <td> 4 </td>
                                <td> Peter Meggik </td>
                                <td> petermeggik@gmail.com </td>
                                <td> L </td>
                                <td> Malang </td>
                                <td> 08123456789 </td>
                                <td><label class="badge badge-success">Lunas</label></td>
                            </tr>
                            <tr>
                                <td> 6 </td>
                                <td> John Doe </td>
                                <td> johndoe@gmail.com </td>
                                <td> L </td>
                                <td> Jakarta </td>
                                <td> 08123456789 </td>
                                <td><label class="badge badge-success">Lunas</label></td>
                            </tr>
                            <tr>
                                <td> 7 </td>
                                <td> Henry Tom </td>
                                <td> henrytom@gmail.com </td>
                                <td> L </td>
                                <td> Bandung </td>
                                <td> 08123456789 </td>
                                <td><label class="badge badge-success">Lunas</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
