<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('form_model');
        $this->load->dbforge();
        $this->load->dbutil();
    }

    public function load_page_skeleton() {
        $page['header'] = $this->load->view('header', '', true);
        $page['body'] = $this->load->view('body', '', true);
        return $page;
    }

    public function index() {
        $this->load->view('session_form', $this->load_page_skeleton());
    }

    function recibir_datos() {
        $data = array(
            'name' => $this->input->post('name'),
            'pass' => $this->input->post('password')
        );
        $this->form_model->crear_usuario($data);
        $this->load->view('welcome_message');
    }

    function validate_user() {
        $data = array(
            'name_validate' => $this->input->post('name_validated'),
            'pass_validate' => $this->input->post('password_validated'),
            'login' => false
        );
        /** @var type $results */
        if (empty($data['name_validate']) or empty($data['pass_validate'])) {
            redirect(base_url());
        } else {
            $results['usuario'] = $this->form_model->validate($data);
            if ($results['usuario'] != null) {
                $data['login'] = true;
                $this->session->set_userdata($data);
                $this->load->view('welcome_message', $results);
            } else {
                header("Location: " . base_url() . "?fallo=true");
                die();
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
    }

    function load_registry() {
        $this->load->view('registry_form', $this->load_page_skeleton());
    }

}

?>