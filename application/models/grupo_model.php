<?php if( !defined('BASEPATH')) exit('No direct script access allowed');

class Grupo_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function crearCurso($data){
		$this->db->insert('usos', array('nombre' => $data['nombre'], 'videos' => $data['videos']));
	}
}
?>
