<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>
    CONECTE | Tu artista mas cerca de ti
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
  <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/blk-design-system-pro.min.css?v=1.0.0')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <style>
    .imgLogo{
      padding: 25px;
    }

    .card{
      margin: 0 0 20px 0;
    }
  </style>
  <!-- CSS Just for demo purpose, don't include it in your project -->
</head>
<body>
  <div class="contact-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="{{ asset('assets/img/brand/logoc.png')}}" class="imgLogo" width="70%">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            @if ($response->state==1)
              <div class="card-body">
                <div class="row">
                  <div class="col-12 text-center">
                    <h5 class="card-title">Referencia</h5>
                    <h5 class="card-title font-weight-bold">#{{$response->data->reference}}</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <h5 class="card-title">Valor: </h5>
                  </div>
                  <div class="col-6 text-right">
                    <h5 class="card-title">${{number_format($solicitudData->COSTO_DEDICATORIA, 0, ',', '.')}}</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <h5 class="card-title">Artista: </h5>
                  </div>
                  <div class="col-6 text-right">
                    <h5 class="card-title">{{$solicitudData->artist->name}}</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <h5 class="card-title">Cliente:</h5>
                  </div>
                  <div class="col-6 text-right">
                    <h5 class="card-title">{{$solicitudData->user->name}}</h5>
                  </div>
                </div>
              </div>
            @else
              <div class="card-body">
                <div class="row">
                  <div class="col text-center">
                    <h4 class="card-text">{{$response->message}}</h4>
                  </div>
                </div>
              </div>
            @endif
          </div>
          @if ($response->state==1)
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <button type="button" class="btn btn-success btn-block" onclick="paymentBtnPayu()">PayU</button>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <form id="formBtnPayuWebView" action="{{env('PAYU_URL')}}" method="post"></form>

  <!-- Footer2 -->
  {{-- <footer class="footer m-0 p-0" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container mx-auto m-4">
      <h6 class="lead text-muted">Desarrollado por <strong>BRP Abogados S.A.S.</strong> Todos los derechos reservados</h6>
    </div>
  </footer> --}}
  <!-- End Footer -->

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
  <script src="{{ asset('assets/js/blk-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>

  <script type="text/javascript">
    var apiKey = "{{ env("PAYU_API_KEY") }}";
    var merchantId = "{{ env('PAYU_MERCHANT_ID') }}";
    var accountId = "{{ env('PAYU_ACCOUNT_ID') }}";
    var reference = "{{$response->data->reference}}";
    var currency = "{{ env('PAYU_CURRENCY') }}";
    var description = "{{$response->data->description}}";
    var idArtist = "{{$response->data->idArtist}}";
    var idUser = "{{$response->data->idUser}}";
    var value = "{{$response->data->value}}";
    var signature = "{{$response->data->signature}}";
    var getResponseUrl = "{{ env('PAYU_RESPONSE_GET_WEBVIEW') }}";
    var postResponseUrl = "{{ env('PAYU_RESPONSE_POST_WEBVIEW') }}";
  </script>

  <script type="text/javascript">
    function paymentBtnPayu() {
      $("#formBtnPayuWebView").append('<input name="ApiKey" type="hidden" value="' + apiKey + '">');
      $("#formBtnPayuWebView").append('<input name="merchantId" type="hidden" value="' + merchantId + '">');
      $("#formBtnPayuWebView").append('<input name="accountId" type="hidden" value="' + accountId + '">');
      $("#formBtnPayuWebView").append('<input name="description" type="hidden" value="' + description + '">');
      $("#formBtnPayuWebView").append('<input name="referenceCode" type="hidden" value="' + reference + '">'); //Codigo del pago

      $("#formBtnPayuWebView").append('<input name="tax" type="hidden" value="0">');
      $("#formBtnPayuWebView").append('<input name="taxReturnBase" type="hidden" value="0">');
      $("#formBtnPayuWebView").append('<input name="currency" type="hidden" value="' + currency + '">');

      $("#formBtnPayuWebView").append('<input name="test" type="hidden" value="0">');
      $("#formBtnPayuWebView").append('<input name="extra1" type="hidden" value="' + idUser + '">');
      $("#formBtnPayuWebView").append('<input name="extra2" type="hidden" value="' + idArtist + '">');

      $("#formBtnPayuWebView").append('<input name="responseUrl" type="hidden" value="' + getResponseUrl + '">');
      $("#formBtnPayuWebView").append('<input name="confirmationUrl" type="hidden" value="' + postResponseUrl + '">');

      $("#formBtnPayuWebView").append('<input name="amount" type="hidden" value="' + value + '">');
      $("#formBtnPayuWebView").append('<input name="signature" type="hidden" value="' + signature + '">');
      document.getElementById("formBtnPayuWebView").submit();
    }
  </script>

</body>
