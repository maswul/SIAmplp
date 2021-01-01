@extends('adminlte::page')

@section('title', 'Pegawai')

@section('content_header')
    <h1>Master Data - Pegawai</h1>
@stop

@section('content')
    <div id="app">
        <pegawai></pegawai>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        window.user = @json(Auth::user())
    </script>
@stop
