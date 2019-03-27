@extends('layouts.master')

@section('css')
    <style>
        img {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }
    </style>
@endsection

@section('title')
    Catch A Tour | Coming Soon!
@endsection

@section('content')
    <div class="verticalhorizontal">
        <img src="{{ asset("logo.jpeg") }}" alt="centered image" />
    </div>
@endsection