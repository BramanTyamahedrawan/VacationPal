@extends('layouts_payment.app_payment')

@section('pembayaran')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-8 mx-auto">
                        <div class="card-body px-5 py-5">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Bayar Via E-Wallet</h3><br>
                                        <div class="d-flex">
                                            <button class="btn btn-outline-info mr-2 col">
                                                <img src="{{ asset('admin_template/template/assets/images/carousel/id_dana_ewallet.png') }}"
                                                    alt="">
                                            </button>
                                            <button class="btn btn-outline-success mr-2 col">
                                                <img src="{{ asset('admin_template/template/assets/images/carousel/id_linkaja_ewallet.png') }}"
                                                    alt="">
                                            </button>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card card-outline-info">
                                                    <p class="py-2 text-muted">Sebelum melakukan transaksi,
                                                        pastikan untuk membaca dan memahami syarat dan ketentuan yang
                                                        berlaku. Perlu diingat bahwa syarat dan ketentuan dapat berubah
                                                        sewaktu-waktu
                                                        tanpa pemberitahuan sebelumnya.</p>
                                                    <p class="text-muted py-lg-2">Dengan memahami syarat dan ketentuan, Anda
                                                        dapat menghindari masalah
                                                        dan risiko yang mungkin timbul. Sebagai pengguna yang cerdas,
                                                        pastikan bahwa Anda selalu mematuhi syarat dan ketentuan yang
                                                        berlaku dan bertindak dengan bertanggung jawab dan sesuai dengan
                                                        hukum dan peraturan yang berlaku.</p>

                                                    <button class="btn btn-info btn-block mt-3" type="button"
                                                        data-toggle="collapse" data-target="#penggunaanLayanan"
                                                        aria-expanded="false" aria-controls="penggunaanLayanan">
                                                        Syarat dan Ketentuan Pengguna
                                                    </button>
                                                    <div class="collapse mt-3" id="penggunaanLayanan">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <ol class="p-1 text-muted">
                                                                    <li>Penggunaan Layanan
                                                                        <ul>
                                                                            <li>Layanan pembayaran menggunakan Link Aja dan
                                                                                Dana
                                                                                hanya dapat digunakan untuk pembayaran atas
                                                                                transaksi yang sah dan sah di Indonesia.
                                                                            </li>
                                                                            <li>Setiap transaksi harus dilakukan oleh
                                                                                pemilik akun
                                                                                terdaftar dan harus dilakukan secara sah dan
                                                                                legal.
                                                                            </li>
                                                                            <li>Pengguna bertanggung jawab penuh atas segala
                                                                                tindakan yang dilakukan dengan akun mereka
                                                                                dan
                                                                                bertanggung jawab atas keamanan akun mereka.
                                                                            </li>
                                                                        </ul>
                                                                    </li><br>
                                                                    <li>Metode Pembayaran
                                                                        <ul>
                                                                            <li>Pembayaran dapat dilakukan menggunakan saldo
                                                                                Link
                                                                                Aja atau Dana yang cukup atau menggunakan
                                                                                metode
                                                                                pembayaran yang telah ditetapkan oleh
                                                                                Layanan.</li>
                                                                            <li>Pembayaran harus dilakukan dalam waktu yang
                                                                                ditentukan oleh Layanan. Jika pembayaran
                                                                                tidak
                                                                                diterima dalam waktu yang ditentukan, maka
                                                                                transaksi
                                                                                dapat dibatalkan atau dikenakan biaya
                                                                                tambahan.</li>
                                                                        </ul>
                                                                    </li><br>
                                                                    <li>Biaya dan Tarif
                                                                        <ul>
                                                                            <li>Biaya dan tarif untuk penggunaan Layanan
                                                                                pembayaran
                                                                                menggunakan Link Aja dan Dana dapat
                                                                                berbeda-beda
                                                                                tergantung pada jenis transaksi dan metode
                                                                                pembayaran yang digunakan.</li>
                                                                            <li>Pengguna harus membayar biaya dan tarif yang
                                                                                ditetapkan oleh Layanan, termasuk biaya
                                                                                tambahan
                                                                                yang mungkin dikenakan jika transaksi
                                                                                tertunda atau
                                                                                gagal.</li>
                                                                        </ul>
                                                                    </li><br>
                                                                    <li>Kebijakan Pengembalian Dana
                                                                        <ul>
                                                                            <li>Pengembalian dana dapat dilakukan jika
                                                                                terjadi
                                                                                kesalahan atau ketidaksesuaian dalam
                                                                                transaksi atau
                                                                                jika dana tidak digunakan dalam waktu yang
                                                                                ditentukan oleh Layanan.</li>
                                                                            <li>Pengembalian dana dapat dikenakan biaya
                                                                                tambahan
                                                                                atau dikenakan syarat dan ketentuan tertentu
                                                                                yang
                                                                                ditetapkan oleh Layanan.</li>
                                                                        </ul>
                                                                    </li><br>
                                                                    <li>Privasi dan Keamanan
                                                                        <ul>
                                                                            <li>Layanan pembayaran menggunakan Link Aja dan
                                                                                Dana
                                                                                menjamin privasi dan keamanan informasi
                                                                                pribadi
                                                                                pengguna.</li>
                                                                            <li>Layanan akan melakukan tindakan pencegahan
                                                                                yang
                                                                                wajar untuk melindungi informasi pribadi
                                                                                pengguna,
                                                                                namun Layanan tidak bertanggung jawab atas
                                                                                kehilangan atau penggunaan informasi pribadi
                                                                                pengguna yang disebabkan oleh tindakan yang
                                                                                tidak
                                                                                sah atau penyalahgunaan oleh pihak ketiga.
                                                                            </li>
                                                                        </ul>
                                                                    </li><br>
                                                                    <li>Perubahan Syarat dan Ketentuan
                                                                        <ul>
                                                                            <li>Layanan berhak untuk mengubah syarat dan
                                                                                ketentuan
                                                                                penggunaan Layanan sewaktu-waktu tanpa
                                                                                pemberitahuan
                                                                                terlebih dahulu.</li>
                                                                            <li>Pengguna diharapkan untuk membaca syarat dan
                                                                                ketentuan yang diperbarui secara berkala
                                                                                untuk
                                                                                memastikan bahwa mereka selalu mematuhi
                                                                                peraturan
                                                                                yang berlaku.</li>
                                                                        </ul>
                                                                    </li><br>
                                                                    <li>Penyelesaian Sengketa
                                                                        <ul>
                                                                            <li>Jika terjadi sengketa terkait penggunaan
                                                                                Layanan
                                                                                pembayaran menggunakan Link Aja dan Dana,
                                                                                maka pihak
                                                                                yang terlibat diharapkan untuk menyelesaikan
                                                                                sengketa tersebut secara damai.</li>
                                                                            <li>Jika penyelesaian damai tidak memungkinkan,
                                                                                maka
                                                                                sengketa akan diselesaikan melalui proses
                                                                                hukum yang
                                                                                berlaku di Indonesia.</li>
                                                                        </ul>
                                                                    </li>
                                                                </ol>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
