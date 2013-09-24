<?= form_open(base_url().'login/validar', array('name'=>'mi_form','id'=>'form'));?>
    <?= form_label('Usuario: ','Usuario',array('class'=>'label'));?>
    <?= form_input('usuario',@set_value('usuario'),'class="input"');?><br/>
    <?= form_label('Contraseña: ','Contrasenia',array('class'=>'label'));?>
    <?= form_password('pass','','class="password"');?><br/>
    <?= form_submit('boton','Ingresar','class="boton"');?>
    <?= form_hidden('oculto','valor_oculto');?>
<?= form_close(); ?>
<hr/>
<!-- mostramos los errores de que se obtienen al validar -->
<h3>Errores</h3>
<?= validation_errors();?>