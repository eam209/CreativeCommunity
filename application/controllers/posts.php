<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('posts_model');
	}

	function index(){
		$data['segmento'] = $this->uri->segment(3);
		$data['posts_tbl'] = $this->posts_model->viewPosts();
		if(!$data['segmento']){
			$data['posts_tbl'] = $this->posts_model->viewPosts();
		}
		else{
			$data['posts_tbl'] = $this->posts_model->viewPost($data['segmento']);
		}
		$this->load->view('layout/heads', $data);
		$this->load->view('layout/headers');
		$this->load->view('posts/view_posts', $data);
		$this->load->view('layout/footers');
	}

	function agregar(){
		$data['title'] = 'Agregar';
		$this->load->view('layout/heads', $data);
		$this->load->view('layout/headers');
		$this->load->view('posts/formulario');
		$this->load->view('layout/footers');
	}

	function recibirDatos(){
		$data = array(
			'titulo' => $this->input->post('titulo'),
			'contenido' => $this->input->post('contenido'),
			'autor' => $this->input->post('autor'),
		);
		$this->posts_model->crearPost($data);
		$this->load->view('layout/heads', $data);
		$this->load->view('layout/headers');
		$this->load->view('posts/view_posts');
		$this->load->view('layout/footers');
	}

	function editar(){
		$data['title'] = 'Editar';
		$data['id'] = $this->uri->segment(3);
		$data['post'] = $this->posts_model->viewPost($data['id']);
		$this->load->view('layout/heads', $data);
		$this->load->view('layout/headers');
		$this->load->view('posts/actualizar_form',$data);
		$this->load->view('layout/footers');
	}

	function actualizar(){
		$id = $this->uri->segment(3);
		$data = array(
			'titulo' => $this->input->post('titulo'),
			'contenido' => $this->input->post('contenido'),
			'autor' => $this->input->post('autor'),
		);
		$this->posts_model->updatePost($id, $data);
		$this->load->view('layout/heads', $data);
		$this->load->view('layout/headers');
		$this->load->view('posts/view_posts');
		$this->load->view('layout/footers');
	}
}

?>