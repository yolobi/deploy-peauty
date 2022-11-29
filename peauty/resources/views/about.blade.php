@extends('layouts.home')

@section('content')
<section class="home-section">
    <div class="container-fluid" style="border-radius: 30px; padding-top:5%; height:100%; margin-top: 5%;">
        <div class="row align-items-center justify-content-center ">
            <div class="col-lg-9">
                <div class="shadow p-3 bg-body h-100" style="border-radius: 30px">
                    <div class="text-centera">
                        <h5 style="font-size: 22px; margin-left: 0.7cm; padding-top:0.7cm; font-weight:bolder">About
                        </h5>
                    </div>
                    <div class="hasil">
                        <p style="padding-left: 0.5cm; padding-right:0.5cm">Be.U website yang bertujuan untuk
                            mempermudah pengguna untuk mencari produk skincare yang sesuai dengan kebutuhan dan kondisi
                            kulit wajah. Selain itu, pengguna juga dapat mengetahui cara merawat dan menjaga kulit
                            wajah, serta cara mengatasi permasalahan kulit wajah yang dialaminya. Sistem yang
                            dikembangkan akan mengambil input sederhana yang dapat dipilih sesuai warna, kondisi dan
                            jenis kulit pengguna.</p>

                    </div>
                    <div class="bag">
                        <div class="hasil">
                            <p style="margin-left:0.5cm; padding-right:0.5cm">How to use Be.U ?</p>
                            <ul style="margin-left: 0.7cm; margin-top:-0.5cm; padding-right:0.5cm">
                                <li> Buat akun dengan memasukkan email dan password</li>
                                <li> Klik button berwarna merah untuk memulai tes</li>
                                <li>Pilih kondisi kulit, jenis kulit dan warna kulit sesuai kondisi kamu</li>
                                <li>Klik submit</li>
                                <li>Setelah itu akan muncul tampilan berupa tips dan rekomendasi produk skincare yang
                                    sesuai dengan kondisi kulit wajah yang telah kamu input</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection