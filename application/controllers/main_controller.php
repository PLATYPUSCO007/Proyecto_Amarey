<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main_controller extends CI_Controller {



    public function print_main() {
        //CARGAR MODELO DEL MAIN
        $this->load->model('main_model');
        //OBTENER MENU PRINCIPAL
        $mainp = $this->main_model->get_mainp();
        //OBTENER SUBMENUS
        $mainsec = $this->main_model->get_mainsec();

        //PASAR LOS MENUS A UN ARRAY
        $data['maindata'] = array(
            'main' => $mainp,
            'main2' => $mainsec
        );
        
        //CARGAR VISTA DE MENUS Y PASAR RESULTADOS A LA VISTA
        $this->load->view('main', $data);
    }

}
