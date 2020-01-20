<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        
        function __construct(){
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('link');
            $this->load->model('form_model');
            $this->load->dbforge();
            $this->load->dbutil();
        }


        public function index()
	{
            $this->load->view('session_form');  
	}
        
        function recibir_datos(){
            $data = array(
                'name' => $this->input->post('name'),
                'pass' => $this->input->post('password')
            );
            $this->form_model->crear_usuario($data);
            $this->load->view('welcome_message');
        }
        
        function load_registry(){
            $this->load->view('registry_form');
        }
}
