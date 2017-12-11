<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor_model extends CI_Model
{
    public function add_leitura($s1, $s2, $s3) {
        $dados = array (
            's1' => $s1,
            's2' => $s2,
            's3' => $s3
        );

        return $this->db->insert('leituras', $dados);
    }

    public function get_leitura() {
        $this->db->select('s1, s2, s3');
        $this->db->order_by('timestamp', 'DESC');
        return $this->db->get('leituras')->row();
    }

}