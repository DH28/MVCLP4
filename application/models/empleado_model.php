<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_model extends CI_Model {

	public function mostrar(){
		$this->db->select('*');
	    $this->db->from('usuarios');
        $this->db->where('u_estado',1);
        $consulta = $this->db->get();
        return $consulta->result();
	}

	public function guardar($datos){
		$this->db->insert("usuarios",$datos);
		if ($this->db->affected_rows()>0) {
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function modificar($id){
        $this->db->where('u_id',$id);
        $consulta = $this->db->get('usuarios');
        $fila=$consulta->row();
        return $fila;
	}

	public function actualizar($id,$datos){
		$this->db->where('u_id',$id);
		$this->db->update("usuarios",$datos);
		if ($this->db->affected_rows()>0) {
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function eliminar($id,$datos){
		$this->db->where('u_id',$id);
		$this->db->update("usuarios",$datos);
		if ($this->db->affected_rows()>0) {
			echo "Bien";
			return TRUE;
		}
		else{
			echo "Mal";
			return FALSE;
		}
	}

}