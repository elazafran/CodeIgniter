<?php 
/**
 * 
 */
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			'dni' => $param['dni'],
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email'],
			'fecnac' => date('Y-m-d',strtotime(str_replace('/', '-', $param['fecnac'])))

		);

		//a qué tabla y qué datos
		$this->db->insert('persona',$campos);
		return $this->db->insert_id();

	}

	public function actualizarDatos($param){
		
		$campos = array(
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email']
		);

		$this->db->where('idPersona', $this->session->userdata('s_idPersona'));
		$this->db->update('persona',$campos);

		return 1;
	}

	public function eliminarPersona($idP){
		
		$campos = array(
			'idPersona' => $idP
		);
		$this->db->delete('persona',$campos);

		
		//$this->db->where('idPersona',$idP);
		//$this->db->delete('persona');

	}

	public function getPersonas(){
		$this->db->select('p.nombre,p.appaterno app,p.apmaterno,p.dni,c.ciudad');
		$this->db->from('persona p');
		$this->db->join('ciudades c', 'p.idCiudad = c.idCiudad' );

		$r = $this->db->get();

		return $r -> result();
	}

	
}


