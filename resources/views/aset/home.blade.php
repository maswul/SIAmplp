@extends('aset.master')
@section('title', 'Bidang Air Minum dan PLP')
@section('content')
    <section class="portfolio-block hire-me" id="app">
        <div class="container">
            <div class="heading">
                <h2>Pinjam Aset Kantor</h2>
                <h3>Selamat datang, {{ Auth::user()->name }}</h3>
            </div>
            <cari-aset></cari-aset>
        </div>
    </section>
@stop
