<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        //Cargar modelo de videos
        $this->load->model('videos_model');
    }


    //Funcion para obtener los videos y cargar la vista
    function print_videos() {
        //Validar si existe la var categoria desde la solicitud
        if (isset($_GET["category"])) {
            //Si existe
            $categories = $_GET["category"];
            //Obtener los videos segun la categoria
            $data['videos'] = $this->videos_model->get_videos($categories);
            //Validar si la var $categories esta vacia 
            if (isset($data['videos']['code']) && $data['videos']['code'] == 1066) {
                //retornar error en consulta
                echo '<h3>' . $data['videos']['message'] . '</h3>';
                die();
            } else {
                //cargar vista de videos
                $this->load->view('videos_form', $data);
            }
        } else {
            //Si no existe
            echo 'NO HAY CATEGORIAS';
            die();
        }
    }

}

?>
