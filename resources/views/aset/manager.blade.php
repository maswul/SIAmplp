@extends('adminlte::page')

@section('title', 'e-Aset Manager')

@section('content_header')
    <h1>e-Aset Manager</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')

@stop

@section('js')
    <script>
        window.user = @json(Auth::user())
    </script>
@stop
