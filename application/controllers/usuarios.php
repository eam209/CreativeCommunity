<?php

class Usuarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('usuarios_model');
	}

	public function index()
	{
		$this->load->view('usuarios_view');
	}

	public function registro()
	{
		$this->load->view('registro_view');
	}

	public function registro_very()
	{
		if($this->input->post('submit_reg'))
		{
           $this->form_validation->set_rules('nombre','Nombre','required');
           $this->form_validation->set_rules('correo','Correo','required|trim|valid_email');
		   $this->form_validation->set_rules('user','Usuario','required|trim|callback_very_user');
		   $this->form_validation->set_rules('pass','Contraseña','required|trim');

           $this->form_validation->set_message('required', 'El campo es obligatorio');
           $this->form_validation->set_message('valid_email', 'ingrese un correo valido');
           $this->form_validation->set_message('very_user', 'El usuario ya existe');
		   if($this->form_validation->run() != FALSE)
		   {
              $this->usuarios_model->add_user();
              $data = array('mensaje'=>'El usuario se registro correctamente');
              $this->load->view('registro_view',$data);
		   }
		   else
		   {
		   	 $this->load->view('registro_view');
		   }
		}
	}

	function very_user($user)
	{
         $variable = $this->usuarios_model->very_user($user);
         if($variable == true)
         {
            return false;
         }
         else
         {
         	return true;
         }
	}


}