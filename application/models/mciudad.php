<?php 
/**
 * 
 */
class Mciudad extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function getCiudades($s){
		$s = $this->db->get_where('ciudades', array('sitReg' => $s));

		return $s->result();
	}
	public function grabarCiudad($param){
		
		$campos = array(
			'ciudad' => $param['ciudad'],
			'idCiudad' => $param['idCiudad']
			
		);

		$this->db->where('idCiudad', $param['idCiudad']);
		$this->db->update('ciudades',$campos);

		return 1;
	}
}
 ?>