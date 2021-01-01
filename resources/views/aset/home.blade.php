@extends('aset.master')
@section('title', 'Bidang Air Minum dan PLP')
@section('content')
    <section class="portfolio-block hire-me" id="app">
        <div class="container">
            <div class="heading">
                <h2>Pinjam Aset Kantor</h2>
            </div>
            <cari-aset :items="[ 'Kamera', 'Laptop', 'GPS', 'Drone', 'Pear', 'Peach', 'Grape', 'Tangerine', 'Pineapple']"></cari-aset>
        </div>
    </section>
@stop
