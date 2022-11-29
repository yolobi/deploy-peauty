@extends('layouts.home')

@section('content')

<section class="home-section">
    <div class="container-fluid" style="border-radius: 30px; padding-top:0%; height:100%; margin-top: 5%;">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-9">
                <div class="shadow p-4 my-2 bg-body h-100" style="border-radius: 30px">
                    <h1></h1>
                    <form action="{{ route('user.post-rekomendasi') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="text-centera">
                                    <h5
                                        style="font-size: 22px; margin-left: 0.5cm; padding-top:0.7cm; font-weight:bolder">
                                        Warna
                                        Kulit</h5>
                                </div>
                                <div class="tombol">
                                    <div class="col-md-12">
                                        <select name="warna_kulit" id="warna_kulit" class="form-select"
                                            aria-label="Default select example">
                                            <option selected value="Kulit Putih">Kulit Putih</option>
                                            <option value="Kulit Putih">Kulit Kuning Langsat</option>
                                            <option value="Kulit Putih">Kulit Sawo Matang</option>
                                            <option value="Kulit Putih">Kulit Gelap</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="text-centera">
                                    <h5
                                        style="font-size: 22px; margin-left: 0.5cm; padding-top:0.7cm; font-weight:bolder">
                                        Jenis
                                        Kulit</h5>
                                </div>
                                <div class="tombol">
                                    <div class="col-md-12">
                                        <select name="jenis_kulit" id="jenis_kulit" class="form-select"
                                            aria-label="Default select example">
                                            <option selected value="Kulit Normal">Kulit Normal</option>
                                            <option value="Kulit Kering">Kulit Kering</option>
                                            <option value="Kulit Berminyak">Kulit Berminyak</option>
                                            <option value="Kulit Kombinasi">Kulit Kombinasi</option>
                                            <option value="Kulit Sensitif">Kulit Sensitif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="text-centera">
                                    <h5
                                        style="font-size: 22px; margin-left: 0.5cm; padding-top:0.7cm; font-weight:bolder">
                                        Kondisi Kulit</h5>
                                </div>
                                <div class="tombol">
                                    <div class="col-md-12">
                                        <select name="kondisi_kulit" id="kondisi_kulit" class="form-select"
                                            aria-label="Default select example">
                                            <option selected value="Jerawat">Jerawat</option>
                                            <option value="Flek Hitam">Flek Hitam</option>
                                            <option value="Pori Besar">Pori Besar</option>
                                            <option value="Kulit Kusam">Kulit Kusam</option>
                                            <option value="Kantung Mata">Kantung Mata</option>
                                            <option value="Komedo">Komedo</option>
                                            <option value="Dark Circle">Dark Circle</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <button type="submit" class="my-2 btn btn-danger w-100 mt-4 p-2">Submit</button>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="home-section-1">
    <div class="container-fluid" style="border-radius: 30px; padding-top:0%; height:100%; margin-top: 5%;">
        <div class="row align-items-center justify-content-center ">
            <div class="col-lg-9">
                <div class="shadow p-3 bg-body h-100" style="border-radius: 30px">
                    <div class="text-centera">
                        <h5 style="font-size: 22px; margin-left: 0.5cm; padding-top:0.7cm; font-weight:bolder">Jenis
                            Kulit</h5>
                    </div>
                    <div class="tombol">
                        <button type="button" class="btn btn-lg btn-custom "
                            style="color: #fff; margin-left: 15px; width: 180px; position: relative; border-color: rgb(211, 102, 102);">
                            <input type="image" src="{{ asset('images/kulitnormal.png') }}" alt=""
                                style="height: 0.95cm; position: relative;" />
                            <span class="next" style="font-size: 18px; text-align: center;" name="Jenis_Kulit"
                                value="Kulit_Normal">Kulit Normal</span>
                        </button>
                        <button type="button" class="btn btn-lg btn-custom "
                            style="color: #fff; margin-left: 220px; margin-top: -60px; width: 200px; position: relative;">
                            <input type="image" src="{{ asset('images/kulitkering.png') }}" alt=""
                                style="height: 0.95cm; position: relative;" />
                            <span class="next" style="font-size: 18px; text-align: center;" name="Jenis_Kulit"
                                value="Kulit_Kering">Kulit Kering</span>
                        </button>
                        <button type="button" class="btn btn-lg btn-custom "
                            style="color: #fff; margin-left: 15px; width: 210px; position: relative; ">
                            <input type="image" src="{{ asset('images/kulitberminyak.png') }}" alt=""
                                style="height: 0.95cm; position: relative;" />
                            <span class="next" style="font-size: 18px; text-align: center;" name="Jenis_Kulit"
                                value="Kulit_Berminyak">Kulit Berminyak</span>
                        </button>
                        <button type="button" class="btn btn-lg btn-custom "
                            style="color: #fff; margin-left: 250px; margin-top: -60px; width: 215px; position: relative;">
                            <input type="image" src="{{ asset('images/kulitkombinasi.png') }}" alt=""
                                style="height: 0.95cm; position: relative;" />
                            <span class="next" style="font-size: 18px; text-align: center;" name="Jenis_Kulit"
                                value="Kulit_Kombinasi">Kulit Kombinasi</span>
                        </button>
                        <button type="button" class="btn btn-lg btn-custom "
                            style="color: #fff; margin-left: 15px; width: 180px; position: relative;">
                            <input type="image" src="{{ asset('images/kulitsensitif.png') }}" alt=""
                                style="height: 0.95cm; position: relative;" />
                            <span class="next" style="font-size: 18px; text-align: center;" name="Jenis_Kulit"
                                value="Kulit_Sensitif">Kulit Sensitif</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection