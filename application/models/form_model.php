<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function crear_usuario($data) {
        if ($this->dbutil->database_exists('amarey')) {
            echo 'Database already exists!';
            $this->db->insert('usuario', array('nombre' => $data['name'],
                'password' => $data['pass']));
        } else {
            if ($this->dbforge->create_database('amarey')) {
                echo 'Database create succesfully!';
            } else {
                print_r($this->db->error());
                echo 'Error en la db';
            }
        }
    }

    function validate($data) {
        $this->db->where('nombre', $data['name_validate']);
        $this->db->where('password', $data['pass_validate']);
        /** @var type $query */
        $query = $this->db->get('usuario');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return null;
        }
    }

}

?>