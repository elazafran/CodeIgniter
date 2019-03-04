<?php 
/**
 * 
 */
class Cciudad extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mciudad');
	}
	
	public function index(){

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vprueba');
		$this->load->view('layout/footer');
	
	}

	public function getCiudades(){
		$s=$this->input->post('sitReg');
		$resultado = $this->mciudad->getCiudades($s);

		echo json_encode($resultado);
	}

	public function grabarCiudad(){
		$param['ciudad'] = $this->input->post('ciudad');
		$param['idCiudad'] = $this->input->post('idCiudad');
		echo var_dump($param);
		$this->mciudad->grabarCiudad($param);


	}

	
}
 ?>