@extends('layouts.app', ['title' => 'Homepage'])
@section('content')

@component('components.alert')

@slot('title')
      Header Component with <strong>Strong</strong> tag
@endslot
Anda belum login!

@slot('footer')
    cek cek cek
@endslot

@endcomponent
<p>
    <strong>PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source.</strong>

    Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.

    PHP merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses di server. Jenis server yang sering digunakan bersama dengan PHP antara lain <strong style="color: orange">Apache</strong>, <strong style="color: orchid">Nginx</strong>, dan <strong style="color: blueviolet">LiteSpeed</strong>.

    Selain itu, PHP juga merupakan bahasa pemrograman yang bersifat open source. Pengguna bebas memodifikasi dan mengembangkan sesuai dengan kebutuhan mereka.
</p>
@endsection
