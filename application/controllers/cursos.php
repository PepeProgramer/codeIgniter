<?php

class Cursos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('mihelper');
		$this->load->model('grupo_model');
	}

	public function index()
	{
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('grupo/header');
		if (!$data['segmento']) {
			$data['cursos'] = $this->grupo_model->obtenerCursos();
		}
		else{
			$data['cursos'] = $this->grupo_model->obtenerCurso($data['segmento']);
		}
		$this->load->view('cursos/cursos', $data);
	}

	public function nuevo()
	{
		$this->load->view('grupo/header');
		$this->load->view('cursos/formulario');
	}

	public function recibirDatos()
	{
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'videos' => $this->input->post('videos')
		);
		$this->grupo_model->crearCurso($data);
		$this->load->library('Menu', array('inicio', 'contacto', 'cursos'));
		$datos['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('welcome_message', $datos);
	}
}
