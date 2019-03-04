<?php

/**
 * 
 */
class Cpersona extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mpersona');
		$this->load->model('musuario');

		$this->load->library('encrypt');


	}

	public function index(){

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('persona/vpersona');
		$this->load->view('layout/footer');

	
	}

	public function guardar(){
		//echo 'entro al metodo guardar';
		//$this->load->view('persona/vpersona');
		
		//persona
		$param['dni'] = $this->input->post('txtDNI');
		$param['nombre'] = $this->input->post('txtNombre'); 
		$param['appaterno'] = $this->input->post('txtApPaterno');
		$param['apmaterno'] = $this->input->post('txtApMaterno');
		$param['email'] = $this->input->post('txtEmail');
		$param['fecnac'] = $this->input->post('txtFecNac');
		//usuario
		$paramUsuario['nomUsuario'] = $this->input->post('txtUsuario');
		$paramUsuario['clave'] = $this->encrypt->sha1( $this->input->post('txtClave') );
		
		//echo "esta es la clave encriptada =>".$paramUsuario['clave']." / ".$paramUsuario['nomUsuario'];
		
		$lastId = $this->mpersona->guardar($param);

		if ($lastId>0) {
			$paramUsuario['idPersona'] = $lastId;	
			$this->musuario->guardarUsuario($paramUsuario);
			$this->load->view('vlogin');

		}else {
			echo "no se ha podido guardar";
			$this->load->view('persona/vpersona');
		}


	}

	public function actualizarDatos(){
		$param['dni'] = $this->input->post('txtDNI');
		$param['nombre'] = $this->input->post('txtNombre'); 
		$param['appaterno'] = $this->input->post('txtApPaterno');
		$param['apmaterno'] = $this->input->post('txtApMaterno');
		$param['email'] = $this->input->post('txtEmail');

		$this->mpersona->actualizarDatos($param);
		//$this->load->view('persona/vpersona');
		redirect('cpersona/index');

	}

	public function eliminarPersona(){
		$idP = $this->input->post('txtIdPersona');

		$this->musuario->eliminarUsuario($idP);
		$this->mpersona->eliminarPersona($idP);
	}
	public function getPersonas(){
		echo json_encode($this->mpersona->getPersonas());
	}
}