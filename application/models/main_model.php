<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_mainp() {
        $this->db->select('*');
        $this->db->from('mainf');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    function get_mainsec() {
        $this->db->select('*');
        $this->db->from('mainh');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

}

?>