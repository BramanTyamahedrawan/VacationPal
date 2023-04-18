@extends('layouts_admin.app_lunas_admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{ asset('admin_template/template/assets/images/dashboard/Group126@2x.png') }}"
                                    class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h2 class="mb-1 mb-sm-0">Selamat Datang di Halaman Admin</h2>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection