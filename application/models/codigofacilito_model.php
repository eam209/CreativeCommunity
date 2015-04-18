<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearCurso($data){
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=> $data['videos'])));
	}
}