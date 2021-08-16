@extends('layouts.app')
@section('sidebar-class', 'is-collapse is-active')
@section('main-class', 'ml-0')
@section('body-class', 'feedy')

@section('root-meta')
    <title>@yield('title') {{ config('feedy.name') }} | {{ config('feedy.tagline') }}</title>
    <meta name="author" content="{{ config('feedy.meta.author') }}">
    <meta name="description" content="{{ config('feedy.meta.description') }}">
@endsection

@section('root-icon')
    <link href="{{ config('feedy.assets.favicon') }}" rel="icon" type="image/png">
    <link rel="shortcut icon" href="{{ config('feedy.assets.favicon') }}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/panel/libs/fontawesome-pro/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/feedy/css/landing.css') }}">
@endsection

@section('root-header')
    @include('feedy::landing.layouts.partials.header')
@endsection

@section('root-footer')
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
@endsection