<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulador extends CI_Controller
{

   function __construct()
   {
       parent::__construct();
       $this->load->model('Sensor_model');
   }

   public function index()
   {
       $sensor1 = $this->input->post('s1');
       $sensor2 = $this->input->post('s2');
       $sensor3 = $this->input->post('s3');

       if($sensor1 != "" && $sensor2 != "" && $sensor3 != ""){
           $this->Sensor_model->add_leitura($sensor1, $sensor2, $sensor3);
       }

       $dados['leituras'] = $this->Sensor_model->get_leitura();
       $this->load->view('simulador/index', $dados);
   }

}

