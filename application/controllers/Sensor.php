<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '../vendor/autoload.php';
use Restserver\Libraries\REST_Controller;

class Sensor extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Sensor_model');
    }

   public function index_get()
  {
      $sensor1 = $this->get('s1');
      $sensor2 = $this->get('s2');
      $sensor3 = $this->get('s3');

      $status = false;
      $timestamp = time();
      $sensores = null;

      if($sensor1 != "" && $sensor2 != "" && $sensor3 != ""){
          $status = true;
          $sensores = array (
              '1' =>  $sensor1,
              '2' =>  $sensor2,
              '3' =>  $sensor3
          );
          $this->Sensor_model->add_leitura($sensor1, $sensor2, $sensor3);
      }

      $response = array(
          'status'      => $status,
          'timestamp'   => $timestamp,
          'sensores'    => $sensores
      );

      $this->response($response);
  }

  public function servidor_get() {
    $dados = $this->Sensor_model->get_leitura();
    $this->response($dados);
  }

}

