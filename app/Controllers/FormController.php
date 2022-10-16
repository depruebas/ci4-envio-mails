<?php

namespace App\Controllers;

class FormController extends BaseController
{
    public function index()
    {
        return view('index.php');
    }

    public function send()
    {

      # Referenciamos nuestra clase para enviar mails
      $email = new \App\Libraries\EmailsSender();

      # Pasamos los parametros del envio
      $data['emailTO'] = $_POST['email'];
      $data['subject'] = $_POST['titulo'];
      $data['message'] = $_POST['texto'];

      if ( $email->SendEmails( $data))
      {
        echo "Envio Correcto";
      }
      else
      {
        echo "Ha habido un error revisa los logs";
      }

    }
}
