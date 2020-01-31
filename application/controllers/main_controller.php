<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('main_model');
    }

    function print_main() {
        $mainp = $this->main_model->get_mainp();
        $mainsec = $this->main_model->get_mainsec();

        $data['maindata'] = array(
            'main' => $mainp,
            'main2' => $mainsec
        );
        
        $this->load->view('header');
        $this->load->view('main', $data);
    }

}
