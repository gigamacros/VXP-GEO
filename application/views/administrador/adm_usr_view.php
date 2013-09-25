<H3>Administrador > Administración de Usuarios</H3>
<HR/>
<?= form_open('usuarios', array('name'=>'mi_form','id'=>'form'));?>
<?= form_label('Buscar: ','Buscar',array('class'=>'label'));?>
<?= form_input('buscar',@set_value('buscar'),'class="input"');?>
<?= form_button('nuevo', 'Nuevo');?>
<?= form_button('modif', 'Modificar');?>
<br/>
<?= form_close();?>
<HR/>
<?php echo $tabla ?>