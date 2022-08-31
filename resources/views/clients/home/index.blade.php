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
@endsection
