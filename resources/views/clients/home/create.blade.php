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
                <form action="/homes" method="POST">
                    @csrf
                    <input type="text" name="username">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
