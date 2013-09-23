<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title><?= $titulo; ?></title>
    </head>
    <body>
        <h1>Login</h1>
        <?= form_open(base_url().'index.php/login/validar', array('name'=>'mi_form','id'=>'form'));?>
            <?= form_label('Usuario: ','Usuario',array('class'=>'label'));?>
            <?= form_input('usuario','','class="input"');?><br/>
            <?= form_label('Contraseña: ','Contrasenia',array('class'=>'label'));?>
            <?= form_password('pass','','class="password"');?><br/>
            <?= form_submit();?>
        <?= form_close(); ?>
    </body>
</html>