@extends('layouts.app')

@section('header')
<header>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <img class="" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div class="col-auto">
                @foreach ($links as $link)
                <div class="col-auto">
                    <a class="px-2" href="">{{$link}}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>
@endsection