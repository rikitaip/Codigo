<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emails_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		
	}

	public function registrarUsuario($data){

		return $this->db->insert('usuarios', $data);
	}

	public function verificarEmail($data){
		$condition = "email =" . "'" . $data['email'] . "'";
		$this->db->select('*');
		$this->db->from('Usuarios');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
	if ($query->num_rows() == 0) {
			return false;
		}else{
			return true;
		}
	}

	public function deletar($id){
		$this->db->where('id', $id);
		$this->db->delete('usuarios');
	}

	public function listar($id){
		$this->db->where('id', $id);
		$query = $this->db->get('usuarios');
		$data['usuarios'] = $query->row_array();
		return $data;
	}

	public function alteraRegistro($data){
		$this->db->where('id', $data['id']);
		$this->db->update('usuarios', $data);
	}
}
?>
