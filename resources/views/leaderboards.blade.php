@extends('layouts.apps')
@section('content')
<div class="d-flex justify-content-center mt-5 mx-5">
    <span><h2 class="mt-3 fw-bold purple">Nama Topik</h2></span>     
</div>
<div class="mx-5 my-5 d-flex justify-content-evenly">
    <div class="card">Besaran dan Satuan</div>
    <div class="card">Vektor</div>
    <div class="card">Gerak Lurus</div>
    <div class="card">Gerak Parabola</div>
</div>
<div class="mx-5 my-5 d-flex justify-content-evenly">
    <div class="card">Gerak Melingkar Beraturan</div>
    <div class="card">Hukum Newton (Gerak)</div>
    <div class="card">Hukum Newton (Gravitasi)</div>
</div>
<div class="mx-5 my-5 d-flex justify-content-evenly">
    <div class="card">Usaha dan Energi</div>
    <div class="card">Momentum dan Impuls</div>
    <div class="card">Getaran Harmonis</div>
</div>
<div class="mx-5 my-5 d-flex justify-content-center">
    <!--template-->
    <table>
        <tr>
            <th rowspan="2"><div class="card rounded-pill" style="height: 75px; width: 120px; margin-top: 15px;"><h3 class="ms-1" style="margin-top: 12.5px;">1</h3></div></th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th><h3>Kenny Jinhiro Wibowo</h4></th>
        </tr>
        <tr>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th><h5>16230</h5></th>
        </tr>
    </table>
</div>
@endsection