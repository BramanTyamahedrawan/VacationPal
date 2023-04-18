@extends('layouts_tiket.app_pesan_tiket')

@section('title', 'Pesan Tiket')

@section('pesan_tiket')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-8 mx-auto">
                        <div class="card-body px-5 py-5">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Pesan Tiket Anda</h3>
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name Lengkap</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    placeholder="Nama Lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">Alamat Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail3"
                                                    placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectGender">Jenis Kelamin</label>
                                                <select class="form-control" id="exampleSelectGender">
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCity1">Alamat</label>
                                                <input type="text" class="form-control" id="exampleInputCity1"
                                                    placeholder="Alamat">
                                            </div>
                                            <a href="{{ route('pembayaran') }}" class="btn btn-primary mr-2">Submit</a>
                                            <a href="{{ route('home') }}" class="btn btn-outline-info">Cancel</a>
                                        </form>
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
