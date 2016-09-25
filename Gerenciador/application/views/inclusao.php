<html>
<head>
<title>Inclusao de emails</title>
</head>
<body>
<div class="main">
<div id="content">
<h3 id='form_head'>Inclusao de email </h3><br/>
<div id="form_input">
<?php

echo form_open('emails/adicionar');

echo form_label('Nome :', 'u_name');
$data= array('name' => 'u_name','placeholder' => 'Entre com o nome','class' => 'input_box');
echo form_input($data);

echo form_label('Email:', 'u_email');
$data= array('type' => 'email','name' => 'u_email','placeholder' => 'Entre com o email','class' => 'input_box');
echo form_input($data);
?>
</div>

<div id="form_button">
<?php
$data = array('type' => 'submit','value'=> 'Submit','class'=> 'submit');
echo form_submit($data); ?>
</div>

<?php echo form_close();?>

</div>
</div>
</body>
</html>

