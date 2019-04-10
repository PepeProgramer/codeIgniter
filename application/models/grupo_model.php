<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Grupo_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function crearCurso($data)
	{
		$this->db->insert('usos', array('curso' => $data['nombre'], 'videos' => $data['videos']));
	}

	function obtenerCursos()
	{
		$query = $this->db->get('usos');
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}
	}

	function obtenerCurso($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('usos');
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}
	}
}

?>
