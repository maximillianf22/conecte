@extends('template.default.layout.default')
@section('content')
<body class="index-page" style="background-color: #e0e1e3">
@include('template.default.navbar.artista.navbar')
   <!-- Header -->
    <div class="wrapper section-signup m-0 p-0" style="background-image: url('{{asset('assets/img/bg/home-mientras.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
    <div class="page-header container">
      
      <div class="container">
      </div>
    </div>
  </div>
  <!-- End Header -->
</body>
@include('template.default.footer.webfoot')
@endsection