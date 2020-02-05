<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main_controller extends CI_Controller {



    static function print_main(CI_Controller $var) {
        $var->load->model('main_model');
        $mainp = $var->main_model->get_mainp();
        $mainsec = $var->main_model->get_mainsec();

        $data['maindata'] = array(
            'main' => $mainp,
            'main2' => $mainsec
        );
        $page['result'] = $var->load->view('main', $data);
    }

}
