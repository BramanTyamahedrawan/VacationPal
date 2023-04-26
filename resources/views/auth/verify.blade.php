@extends('layouts_auth.app_auth')

@section('verify')
    @parent
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <div class="card-header">{{ __('Cek Email Anda') }}</div>
                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                <div class="p-6">
                                    {{ __('Sebelum melanjutkan, periksa email Anda untuk tautan verifikasi.') }}
                                    {{ __('Jika Anda tidak menerima email tersebut.') }}<br>
                                </div><br><br>
                                <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit"
                                        class="btn
                                    btn-outline-info
                                    btn-icon-text p-lg-3">
                                        <i
                                            class="mdi mdi-reload
                                        btn-icon-prepend"></i>{{ __('Resend Verification Email') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
