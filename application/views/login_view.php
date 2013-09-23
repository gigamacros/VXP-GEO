<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title><?= $titulo; ?></title>
    </head>
    <body>
        <h1>Login</h1>
        <!-- creamos el formulario de logueo utilizando el controlador "login" y la funcion "validar" -->
        <?= form_open(base_url().'index.php/login/validar', array('name'=>'mi_form','id'=>'form'));?>
            <?= form_label('Usuario: ','Usuario',array('class'=>'label'));?>
            <?= form_input('usuario','','class="input"');?><br/>
            <?= form_label('Contraseña: ','Contrasenia',array('class'=>'label'));?>
            <?= form_password('pass','','class="password"');?><br/>
            <?= form_submit('boton','Ingresar','class="boton"');?>
            <?= form_hidden('oculto','valor_oculto');?>
        <?= form_close(); ?>
        
        <hr/>
        <!-- mostramos los errores de que se obtienen al validar -->
        <h3>Errores</h3>
        <?= validation_errors();?>
    </body>
</html>