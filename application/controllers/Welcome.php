<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('Login_model');

	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$usuario=$this->input->post("nombre");
		$clave=$this->input->post("clave");
		$result=$this->Login_model->login($usuario,$clave);
		if ($result) {
			$_SESSION["usuario"]=$result[0]["u_nombre"].' '.$result[0]["u_apellidos"];
			header('Location:'.base_url().'Principal/index');
		}
		else{
			header('Location:'.base_url());
		}
	}

	public function salir(){
		session_destroy();
		header('Location:'.base_url());
	}
}
