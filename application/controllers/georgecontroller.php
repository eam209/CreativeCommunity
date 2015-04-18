<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class georgecontroller extends CI_Controller {
      public function __construct(){
      	parent::__construct();
      	$this->load->helper('mihelper');
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
      }
       public function index(){
       	  $this->load->library('menu',array('inicio','contacto','curso'));
       	  $data['mi_menu'] = $this->menu->construirMenu();
       	  $this->load->view('georgecontroller/headers');
          $this->load->view('georgecontroller/bienvenido',$data);
          
       }
       public function holamundo(){
       	  $this->load->view('georgecontroller/headers');
          $this->load->view('georgecontroller/bienvenido');

       }

       public function video(){
        $this->load->view('georgecontroller/video');
       }

       public function nuevo(){
        $this->load->view('georgecontroller/headers');
        $this->load->view('georgecontroller/formulario');

       }
       function recibirDatos(){
         $data = array(
             'nombre' => $this->input->post('nombre'),
             'videos' => $this->input->post('videos') 

          );
        $this->codigofacilito_model->crearCurso($data);
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');

       }
}

?>