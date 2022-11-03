<html>
<head>
    <title>{{$title ??'Beranda'}}</title>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/fontawesome5/css/all.css') }}" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
<main>
    <header> 
       <ul class="kiri">
            <li><a href="{{ route('site.index') }}">Beranda</a></li></ul>
        <ul class="tengah">
            <li><a href="{{ route('site.kontak') }}">Kontak</a></li></ul>
        <ul class="kanan">
            <li><a href="{{ route('site.about') }}">About</a></li></ul>
    </header>
<main id="content">
    {{ $slot }}
</main>

<div class="contant-home">
    <div class="watermark"> Design By : 12108722 Revan Rionaldo From Rombel PPLG XI-3  Rayon Sukasari 1 </div> </div>
</div>
</body>
</html>