<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearPost($data){
		$this->db->insert('posts_tbl', array('titulo' => $data['titulo'], 'contenido' => $data['contenido'], 'autor' => $data['autor']));
	}
	function viewPosts(){
		$query = $this->db->get('posts_tbl');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	function viewPost($id){
		$this->db->where('id_post', $id);
		$query = $this->db->get('posts_tbl');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	function updatePost($id, $data){
		$x = array(
			'titulo' => $data['titulo'],
			'contenido' => $data['contenido'],
			'autor' => $data['autor'],
		);
		$this->db->where('id_post', $id);
		$query = $this->db->update('posts_tbl', $x);
	}
}

?>