@extends('adminlte::page')

@section('title', 'Pegawai')

@section('content_header')
    <h1>Master Data - Pegawai</h1>
@stop

@section('content')
    <div id="app">
        <div class="card card-warning card-outline">
            <div class="card-header">
                <h1 class="card-title">Master Data Pegawai</h1>
                <div class="card-tools">
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Main Menu</a>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        window.user = @json(Auth::user())
    </script>
@stop
