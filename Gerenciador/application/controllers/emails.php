<?php
class Emails extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('Emails_model');
}

public function menu_show() {
$this->load->view("menu");
}

public function inclusao_show() {
$this->load->view("inclusao");
}

public function alteracao_show() {
$this->load->view("alteracao");
}

public function exclusao_show() {
$this->load->view("exclusao");
}


public function adicionar(){
	$dh_usu = date("Y-m-d H:i:s");
	$udata = array('nome' => $this->input->post('u_name'),'email' => $this->input->post('u_email'), 'dh_inclusao' => $dh_usu);
	$get_result = $this->Emails_model->verificarEmail($udata);
	if($get_result){
		echo "Email ja esta sendo usado";
		$this->load->view("inclusao");
		}else{
			$res = $this->Emails_model->registrarUsuario($udata);
			$this->load->view("menu");
		}
	}

public function deletar(){
	$id = $this->input->post('id');
	$this->Emails_model->deletar($id);
	$this->load->view("menu");
}

public function listar(){
	$id = $this->input->post('id');
	$data= $this->Emails_model->listar($id);
	$this->load->view("alteracao", $data);
}

public function alterar(){
	$dh_usu = date("Y-m-d H:i:s");
	$data = array('id' => $this->input->post('u_id'),'nome' => $this->input->post('u_name'), 'email' => $this->input->post('u_email'), 'dh_alteracao' => $dh_usu);
	$this->Emails_model->alteraRegistro($data);
	$this->load->view("menu");
}

}
?>