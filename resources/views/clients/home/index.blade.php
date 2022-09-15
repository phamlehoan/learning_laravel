@extends('layouts.application')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="row">
        <div class="col-3">
            @include('clients.navbar')
        </div>
        <div class="col-9">
            <div class="text-center">
                ABC
            </div>
        </div>
    </div>
    <div class="row">
        <img src="https://cdn.tuoitre.vn/2022/7/28/tu-van-tuyen-sinh-ha-noi-2022-nam-tran06-16589818104651450538903.jpg" alt="" class="w-25">
        <a href="{{ route('download-image').'?image_url=https://cdn.tuoitre.vn/2022/7/28/tu-van-tuyen-sinh-ha-noi-2022-nam-tran06-16589818104651450538903.jpg' }}">Tải ảnh xuống</a>
    </div>
@endsection
