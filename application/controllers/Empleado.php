<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('Empleado_model');
	}

	public function index(){
		$this->load->view('Principal/index');
		$empleado=$this->Empleado_model->mostrar();
		$this->load->view('Empleado/index',compact("empleado"));
	}
     
    public function nuevo(){
		$this->load->view('Principal/index');
		$this->load->view('Empleado/nuevo');
	}

	public function guardar()
	{
		$id=$this->input->post("id");
		$nombre=$this->input->post("nombre");
		$apellidos=$this->input->post("apellidos");
		$clave=$this->input->post("clave");

		$datos=array(
			'u_nombre' =>$nombre,
			'u_apellidos' =>$apellidos,
			'u_clave' =>$clave,
			'u_estado' =>1,
			 );

		if ($_POST["id"]=="") {
			if ($result=$this->Empleado_model->guardar($datos)==TRUE) {
				echo "REgistro Exitoso";
				header('Location:'.base_url().'Empleado/index');
			}
			else{
				echo "error al insertar";
				header('Location:'.base_url().'Empleado/index');
			}
		}
		else{
			if ($result=$this->Empleado_model->actualizar($id,$datos)==TRUE) {
				echo "Actualizacon  Exitoso";
				header('Location:'.base_url().'Empleado/index');
			}
			else{
				echo "error al insertar";
				header('Location:'.base_url().'Empleado/index');
			}
		}

	}

	public function modificar(){
		$this->load->view('Principal/index');
		$id=$_GET['id'];
		$result=$this->Empleado_model->modificar($id);
		$datos=array(
			'id' => $result->u_id,
			'nombre'=> $result->u_nombre,
			'apellidos'=> $result->u_apellidos,
			'clave'=> $result->u_clave 
			);
		$this->load->view('Empleado/modificar',$datos);
	}

	public function eliminar(){
		$id=$_GET['id'];
		$datos=array(
			'u_estado' => 0 
			);
		if ($result=$this->Empleado_model->eliminar($id,$datos)==TRUE) {
			header('Location:'.base_url().'Empleado/index');
		}
		else{
			header('Location:'.base_url().'Empleado/index');
		}
	}
}
