<?php
class Usuarios_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function very_user($user)
	{
		$consulta = $this->db->get_where('usuarios',array('usuario'=>$user));
		if($consulta->num_rows() == 1 )
		{
            return true;
		}
		else
		{
			return false;

	    }

    }

     public function add_user()
     {
     	$this->db->insert('usuarios',array(
                             'nombre'=>$this->input->post('nombre',TRUE),
                             'correo'=>$this->input->post('correo',TRUE),
                             'usuario'=>$this->input->post('user',TRUE),
                             'pass'=>$this->input->post('pass',TRUE),
                             'codigo'=>'123456',
                             'estado'=>'0',
     		                 ));
     }

}