<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        //Cargar modelo de videos
        $this->load->model('videos_model');
    }

    public function load_page_skeleton() {
        $page['header'] = $this->load->view('header', '', true);
        $page['body'] = $this->load->view('body', '', true);
        return $page;
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
            } else {
                //llamamos la funcion skeleton y la almacenamos en el array $data
                $data['skeleton'] = $this->load_page_skeleton();
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
