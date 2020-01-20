<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function crear_usuario($data){
        if($this->dbutil->database_exists('amarey')){
            echo 'Database already exists!';
            $this->db->insert('usuario', array('nombre' => $data['name'], 
            'password' => $data['pass']));
        }
        else{
            if($this->dbforge->create_database('amarey')){
                echo 'Database create succesfully!';
            }else{
                print_r($this->db->error());
                echo 'Error en la db';
            }
        }
            
        
    }
}

?>