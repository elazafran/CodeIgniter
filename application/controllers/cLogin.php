<?php 

/**
 * 
 */
class Clogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mlogin');
		
		


	}
//posible quitar
	public function index(){
		$data['mensaje'] = ' ';
		$this->load->view('vlogin',$data);

	}

	public function ingresar(){

		$usu = $this->input->post('txtUsuario');
		$pass = $this->encrypt->sha1($this->input->post('txtClave') );
			
		$res = $this->mlogin->ingresar($usu,$pass);


		if ($res == 1) {
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('persona/vupdatepersona');
			$this->load->view('layout/footer');

		}else {
			$data['mensaje'] = "Usuario o contraseña erronea";
			$this->load->view('vlogin',$data);
			
		}
	}
}

 ?>