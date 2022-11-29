@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="card h-auto w-75 p-4">
            <div class="col-md-12 p-4">
                <h3>Jenis Kulit - <span class="text-danger">{{ $jenis_kulit->nama }}</span></h3>
                <div class="row">
                    @foreach ($product_jenis as $pr)
                    <div class="col-md-4">
                        <div class="card p-4 h-100 w-100 d-flex justify-content-end">
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-thumbnail" src="{{ asset('images/product/'. $pr->gambar .'') }}"
                                        alt="">
                                </div>
                                <div class="col-8">
                                    {{ $pr->nama }}
                                </div>
                            </div>
                            <div class="row card-footer">
                                <div class="card-link">
                                    <a href="{{ $pr->tokopedia }}" class="text-success">Tokopedia</a>
                                    <a href="{{ $pr->shopee }}" class="text-danger">Shopee</a>
                                    <a href="{{ $pr->lazada }}" class="text-primary">Lazada</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- <li>{{ $jenis_kulit->nama }}</li> --}}
                <hr>
                <h3>Kondisi Kulit - <span class="text-danger">{{ $kondisi_kulit->nama }}</span></h3>
                <div class="row">
                    @foreach ($product_kondisi as $pr)
                    <div class="col-md-4">
                        <div class="card p-4 h-100 w-100 d-flex justify-content-end">
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-thumbnail" src="{{ asset('images/product/'. $pr->gambar .'') }}"
                                        alt="">
                                </div>
                                <div class="col-8">
                                    {{ $pr->nama }}
                                </div>
                            </div>
                            <div class="row card-footer">
                                <div class="card-link">
                                    <a href="{{ $pr->tokopedia }}" class="text-success">Tokopedia</a>
                                    <a href="{{ $pr->shopee }}" class="text-danger">Shopee</a>
                                    <a href="{{ $pr->lazada }}" class="text-primary">Lazada</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection