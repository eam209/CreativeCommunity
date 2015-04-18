<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('posts_model');
	}

	public function index(){
		$data['title'] = 'Bienvenido';
		$data['posts_tbl'] = $this->posts_model->viewPosts();
		$this->load->view('layout/heads', $data);
		$this->load->view('layout/headers');
		$this->load->view('welcome_message', $data);
		$this->load->view('layout/footers');
	}
}