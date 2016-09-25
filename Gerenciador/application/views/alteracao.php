<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listagem e alteracao</title>
</head>
<body>
<h3>Informe o ID para pesquisa: </h3>
<?php
// Open form and set URL for submit form
echo form_open('emails/listar'); ?>
  <?php echo validation_errors(); ?>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_submit('submit','Pesquisar'); ?>
<?php echo form_close(); ?>
<h3>Registro a ser alterado:</h3>
<?php echo form_open('emails/alterar') ?>
<?php echo form_label('ID atual: ', 'u_id');
$data = array('type' => 'id', 'name' =>'u_id', 'value' => htmlentities($usuarios['id']), 'class' => 'input box', 'readonly' => 'readonly');
echo form_input($data);
?>
<?php echo form_label('Nome atual: ', 'u_name');
$data = array('type' => 'name', 'name' =>'u_name', 'value' => htmlentities($usuarios['nome']), 'class' => 'input box');
echo form_input($data);
?>
<?php echo form_label('Email atual: ', 'u_email');
$data = array('type' => 'email', 'name' =>'u_email', 'value' => htmlentities($usuarios['email']), 'class' => 'input box');
echo form_input($data);
?>
<div id="form_button">
<?php
$data = array('type' => 'submit','value'=> 'Alterar','class'=> 'submit');
echo form_submit($data); ?>
</div>
<?php echo form_close();?>
</body>
</html>