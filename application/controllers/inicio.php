<?php 

class Inicio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//echo "Hola desde el controlador";
		$this->load->view('inicio_view');
	}
}