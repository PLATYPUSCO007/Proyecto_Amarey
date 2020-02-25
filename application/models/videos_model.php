<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function get_videos($category){
        //Preparamos la consulta a la db
        $this->db->select('*');
        $this->db->from('videos');
        $this->db->where('categories', $category);
        
        //Obtenemos el resultado
        $query = $this->db->get();
        if($query && $query->num_rows() > 0){
            return $query->result();
        }else{
            return $this->db->error();
        }
    }
}
?>