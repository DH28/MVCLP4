<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 
class Login_model extends CI_Model 
{
	 public function Login($usuario,$clave) 
	 {
		$this->db->select('*');
	    $this->db->from('usuarios');
	    $this->db->where('u_nombre', $usuario);
        $this->db->where('u_clave', $clave);
        $this->db->where('u_estado',1);
        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;
	 }
} 
?>