@extends('aset.master')
@section('title', 'Bidang Air Minum dan PLP')
@section('content')
<section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Form peminjaman</h2>
                </div>
                <form>
                    <div class="form-group"><label for="subject">Nama Pegawai</label><select class="form-control" id="subject"><option value="" selected="">Choose Subject</option><option value="1">Subject 1</option><option value="2">Subject 2</option><option value="3">Subject 3</option></select></div>
                    <div
                        class="form-group"><label for="email">Aset</label><input class="form-control" type="email" id="email"></div>
            <div class="form-group"><label for="message">Tujuan</label><textarea class="form-control" id="message"></textarea></div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6"><label for="hire-date">Rencana Pengembalian</label><input class="form-control" id="hire-date" type="date"></div>
                    <div class="col-md-6 button"><button class="btn btn-primary btn-block" type="submit">Kirim</button></div>
                </div>
            </div>
            </form>
            </div>
        </section>
@stop
