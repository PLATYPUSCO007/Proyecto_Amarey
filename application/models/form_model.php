<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function crear_usuario($data){
        $this->db->insert('usuario', array('nombre' => $data['name'], 
            'password' => $data['pass']));
    }
}

?>