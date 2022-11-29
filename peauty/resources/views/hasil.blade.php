@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="card h-auto w-75 p-4">
            <div class="col-md-12 p-4">
                <h3>Jenis Kulit - <span class="text-danger">{{ $jenis_kulit->nama }}</span></h3>
                <p>{{ $jenis_kulit->tips }}</p>
                <hr>
                <h3>Kondisi Kulit - <span class="text-danger">{{ $kondisi_kulit->nama }}</span></h3>
                <p>{{ $kondisi_kulit->tips }}</p>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <a href="{{ route('user.product', ['id' => $id]) }}"
                            class="btn btn-danger p-2 my-2 w-100">Rekomendasi
                            produk</a>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection