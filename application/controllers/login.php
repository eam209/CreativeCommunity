<?
class Php extends CI_Controller {
    function login()
    {
        $this->load->helper('form');
        if(!isset($_POST['maillogin'])){    
            $this->load->view('login');       
        else{                                
            $this->form_validation->set_rules('maillogin','e-mail','required|valid_email');       
            if(($this->form_validation->run()==FALSE)){                
                $this->load->view('login');                           
            }
            else{                                                    
                $this->load->model('usuarios_model');
                $ExisteUsuarioyPassoword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);    
                if($ExisteUsuarioyPassoword){    
                    echo "Validacion Ok<br><br><a href=''>Volver</a>";    
                }
                else{    
                    $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
                    $this->load->view('login',$data);     
                }
            }
        }
    }
}
?>