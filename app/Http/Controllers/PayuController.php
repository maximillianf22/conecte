<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth, Session, Redirect, Mail;
use App\User, App\tbl_billeteras;
use App\tbl_configuraciones_artistas, App\tbl_movimientos;
use App\tbl_solicitudes_de_dedicatorias, App\tbl_parametros;

class PayuController extends Controller
{
  public function getRecharge(Request $request)
  {
    $result = $request->all();
    $transactionState = $request->transactionState;
    if ($transactionState==4) {
      //Aprobado
      $message = "Recarga realizada correctamente, Tu recarga ha sido registrada exitosamente, espere un momento";
    }elseif ($transactionState==6) {
      //Rechazado
      $message = "Recarga Rechazada, Tu recarga ha sido rechazada, Intenta mas tarde";
    }elseif ($transactionState==7) {
      //Pendiente
      $message = "Pendiente de confirmación, Tu recarga se encuentra en proceso de confirmación, espere un momento";
    }else{
      $message = "Error, Ha ocurrido un error";
    }

    Session::flash('message', $message);
    if (Auth::check()) {
      return Redirect::route('welcome');
    }else{
      return Redirect::route('index');
    }
  }

  public function postRecharge(Request $request)
  {
    $idUser = $request->extra1;
    $value = $request->value;

    $state = $request->state_pol;
    if ($state==4) {
      //Aprobado
      $userData = User::where('id', $idUser)->first();
      if (!empty($userData)) {
        $moneyData = tbl_billeteras::where('ID_USER', $idUser)->first();
        if (!empty($moneyData)) {
          $moneyData->SALDO = $moneyData->SALDO + $value;
          $moneyData->SALDO_TOTAL = $moneyData->SALDO_TOTAL + $value;
          $moneyData->update();
        }
      }
    }
  }

  public function getPayment(Request $request)
  {
    $result = $request->all();
    $transactionState = $request->transactionState;
    if ($transactionState==4) {
      //Aprobado
      $message = "Pago realizado correctamente, Tu pago ha sido registrado exitosamente, espere un momento";
    }elseif ($transactionState==6) {
      //Rechazado
      $message = "Pago Rechazado, Tu pago ha sido rechazado, Intenta mas tarde";
    }elseif ($transactionState==7) {
      //Pendiente
      $message = "Pendiente de confirmación, Tu pago se encuentra en proceso de confirmación, espere un momento";
    }else{
      $message = "Error, Ha ocurrido un error";
    }

    Session::flash('message', $message);
    if (Auth::check()) {
      return Redirect::route('welcome');
    }else{
      return Redirect::route('index');
    }
  }

  public function postPayment(Request $request)
  {
    $idUser = $request->extra1;
    $idArtist = $request->extra2;

    $state = $request->state_pol;
    if ($state==4) {
      $value = $request->value;

      $artistData = User::findOrFail($idArtist);

      $configArtista = tbl_configuraciones_artistas::where('ID_ARTISTA', $idArtist)->first();
      if (!empty($configArtista)) {
        //Billetera del artista
        $billeteraArtista = tbl_billeteras::where('ID_USER', $idArtist)->first();

        //Billetera del administrador
        $billeteraAdmin = tbl_billeteras::where('ID_USER', 1)->first();

        $movimientosData = tbl_movimientos::where('ID_ARTISTA', $idArtist)
          ->where('ID_CLIENTE', $idUser)
          ->first();
        if (!empty($movimientosData)) {
          $solicitudData = tbl_solicitudes_de_dedicatorias::where('ID_ARTISTA', $idArtist)
            ->where('ID_CLIENTE', $idUser)
            ->first();
          if (!empty($solicitudData)) {
            //Acreditamos el porcentaje de ganacia al artista
            $billeteraArtista->SALDO = $billeteraArtista->SALDO + $movimientosData->COMICION_ARTISTA;
            $billeteraArtista->SALDO_TOTAL = $billeteraArtista->SALDO_TOTAL + $billeteraArtista->SALDO;
            $billeteraArtista->update();

            //Acreditamos el porcentaje de ganacia al administrador
            $billeteraAdmin->SALDO       = $billeteraAdmin->SALDO + $movimientosData->COMICION_PLATAFORMA;
            $billeteraAdmin->SALDO_TOTAL = $billeteraAdmin->SALDO_TOTAL + $billeteraAdmin->SALDO;
            $billeteraAdmin->update();

            $movimientosData->ID_ESTADO = 40;
            $movimientosData->update();

            $solicitudData->ID_ESTADO = 13;
            $solicitudData->update();

            try {
              $msg = tbl_parametros::where('ID', '38')->first();

              $data['nameArtista'] = $artistData->name;
              $data['nameCliente'] = Auth::user()->name;
              $data['msg'] = $solicitudData->MENSAJE;
              $data['email'] = $artistData->email;

              Mail::send('mail.dedicatoria', ['data' => $data, 'msg' => $msg], function ($mail) use ($data) {
                $mail->subject('Nueva solicitud de dedicatoria');
                $mail->to($data['email'], $data['nameArtista']);
              });

              //Creamos la notificacion Push App
              $externalUserIds = $artistData->NOTIFICATION_TOKEN;
              $heading = array("en" => "Conecte Artista");
              $content = array("en" => "Tienes una nueva solicitud");
              $data = array("type" => "1", "data" => $solicitudData);
              $fields = array(
                  'app_id' => '57065a04-a63b-4563-be64-8b9f2cf2a268',
                  'include_external_user_ids' => array("$externalUserIds"),
                  'data' => $data,
                  'contents' => $content,
                  'headings' => $heading
              );

              ob_start();

              $fields = json_encode($fields);
              print("\nJSON sent:\n");
              print($fields);

              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
              curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
              curl_setopt($ch, CURLOPT_HEADER, FALSE);
              curl_setopt($ch, CURLOPT_POST, TRUE);
              curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

              curl_exec($ch);
              curl_close($ch);

              ob_end_clean();

            } catch (\Exception $e) {

            }
          }
        }
      }

    }
  }

}
