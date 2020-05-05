@extends('template.default.layout.default')

@section('content')

<body class="index-page" style="background-color: #e0e1e3">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom">
                    <img src="{{ asset('assets/img/brand/logoc.png')}}" width="55%">
                </a>
            </div>
        </div>
    </nav>
    <div class="wrapper m-0 p-0" style="background-image: url('{{asset('assets/img/bg/header.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
        <div class="page-header">
            <div class="squares square1"></div>
            <div class="squares square2"></div>
            <div class="squares square3"></div>
            <div class="squares square5"></div>
            <div class="squares square6"></div>
            <div class="squares square7"></div>
            <div class="container">
                <div class="row">
                    <div class="content-center text-left col-md-5 mt-5 offset-md-2">
                        <h1 class="h1-seo p-0 m-0 text-white display-2"><strong>¡Descarga nuestra app!</strong></h1>
                        <h3 class="m-0 mb-4 p-0  text-white"><small></small><strong>Conecta</strong> tu persona favorita con tu artista favorito</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

@endsection