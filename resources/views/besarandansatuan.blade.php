@extends('layouts.topic')
@section('topic_content')
<p>Besaran adalah<span class="fw-bolder">&nbsp;segala sesuatu yang dapat diukur dan dinyatakan dengan angka, serta memiliki satuan.</span></p>
<p>Satuan adalah<span class="fw-bolder">&nbsp;segala sesuatu yang menyatakan hasil pengukuran atau pembanding dari suatu besaran.</span></p>
<p>Ada satuan yang<span class="fw-bolder">&nbsp;baku</span>&nbsp;dan ada yang<span class="fw-bolder">&nbsp;tidak baku</span>.</p>
<p>Yang dipakai dalam Fisika adalah<span class="fw-bolder">&nbsp;besaran dan satuan</span>&nbsp;yang<span class="fw-bolder">&nbsp;baku</span> yaitu dari<span class="fw-bolder">&nbsp;Satuan Internasional (SI)</span></p>
<br/>
<h3>Besaran Pokok</h3>
<p>Besaran pokok adalah <span class="fw-bolder">besaran dasar untuk menetapkan besaran yang lain</span>.</p>
<p>Berikut adalah 7 besaran pokok beserta satuannya yang telah disepakati:</p>
<img src="{{ asset('img/BesaranPokok.png') }}" class="rounded mx-auto d-block">
<h3>Besaran Turunan</h3>
<p>Besaran turunan adalah <span class="fw-bolder">besaran yang diturunkan atau berasal dari besaran pokok</span>.</p>
<p>Berikut adalah beberapa dari banyak besaran turunan:</p>
<img src="{{ asset('img/BesaranTurunan.png') }}" class="rounded mx-auto d-block">
<h3>Dimensi</h3>
<p>Dimensi adalah bentuk penulisan besaran menggunakan lambang satuan besaran pokok.</p>
<p>Ciri-cirinya adalah terdapat lambang besaran pokok di dalam kurung siku.</p>
<img src="{{ asset('img/Dimensi.png') }}" class="rounded mx-auto d-block">
<br/>
<p>Nah, bagaimana kalau dimensi dibutuhkan untuk perhitungan?</p>
<figure>
    <img src="https://i0.wp.com/www.zenius.net/blog/wp-content/uploads/2021/01/contoh.png?fit=534%2C338&ssl=1" class="rounded mx-auto d-block">
    <figcaption class="text-center">Sumber: Zenius | https://www.zenius.net/blog/materi-lengkap-besaran-dan-satuan-fisika</figcaption>
</figure> 
<p>Simak <span class="fw-bolder">playlist</span> yang dibuat oleh <span class="fw-bolder">Le GuruLes</span> terkait Besaran dan Satuan untuk dapat mengerti materi ini lebih dalam.</p>
<iframe width="560" height="315" class="rounded mx-auto d-block" src="https://www.youtube.com/embed/videoseries?list=PLovW1TU0Q47yMBBQKezzFp8i5r8DNLs5H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p>Sumber: Zenius</p>
@endsection