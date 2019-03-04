<?php
/**
 * 
 	SELECT
	u.idUsuario, p.nombre, p.appaterno, p.apmaterno
	FROM
	usuario u
	INNER JOIN  persona p ON u.idPersona = p.idPersona
	WHERE u.nomUsuario = 'elazafran' AND u.clave = 'da39a3ee5e6b4b0d3255bfef95601890afd80709'

 */
class Mlogin extends CI_Model
{
	
	public function index(){
		$data['mensaje'] = '';
	}

	public function ingresar($usu,$pass){

		$this->db->select('p.idPersona, u.idUsuario, p.nombre, p.appaterno, p.apmaterno');
		$this->db->from('usuario u');
		$this->db->join('persona p','u.idPersona = p.idPersona');
		$this->db->where('u.nomUsuario', $usu);
		$this->db->where('u.clave', $pass);

		//guardamos todos los resultado de esta consulta
		$resultado = $this->db->get();

		if ($resultado->num_rows() == 1) {
			
			$r = $resultado->row();
		// guardamos lo datos en un array para pasarlo a variable de session
			$s_usuario = array(
				's_idPersona' => $r->idPersona,
				's_idusuario' => $r->idUsuario, 
				's_usuario' => $r->nombre.", ".$r->appaterno .", ".$r->apmaterno 
			);

			$this->session->set_userdata($s_usuario);

			return 1;
			
		}else {
			//echo "no hay usuario con esos datos";
			return 0;
		}

		
	}	
}
?>	