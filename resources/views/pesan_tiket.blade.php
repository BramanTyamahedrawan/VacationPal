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
                                                <label>Jenis Kelamin</label>
                                                <select class="js-example-basic-single" style="width:100%">
                                                    <option value="LA">Laki-Laki</option>
                                                    <option value="PR">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputAlamat">Name Lengkap</label>
                                                <input type="text" class="form-control" id="exampleInputAlamat"
                                                    placeholder="Alamat Anda">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputDate1">Tanggal Kedatangan</label>
                                                <input type="date" class="form-control" id="exampleInputDate1"
                                                    name="tanggal_kedatangan">
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <input type="number" class="form-control form-control-secondary bg-dark"
                                                    id="harga" name="harga" value="10000" readonly>
                                            </div>
                                            <a href="#" class="btn btn-primary mr-2">Submit</a>
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
