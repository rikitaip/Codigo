<html>
<head>
<title>Exclusao de registro</title>
</head>
<body>
<div class="main">
<div id="content">
<h3 id='form_head'>Exclusao de registro </h3><br/>
<div id="form_input">
<h3>Informe o ID para excluir: </h3>
<?php
// Open form and set URL for submit form
echo form_open('emails/deletar'); ?>
  <?php echo validation_errors(); ?>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_submit('submit','Excluir'); ?>
<?php echo form_close(); ?>

</div>
</div>
</body>
</html>