<h1>Login</h1>

<?php
echo validation_errors("<p style='color: red;'>","</p>");
?>

<p>Complete los datos y presione 'Ingresar'</p>

<?php
echo form_open('users/submit');

echo "Usuario: ";
echo form_input('usuario','');
echo '<br>';

echo "Contraseña: ";
echo form_password('contrasena','');
echo '<br>';

echo form_submit('ingresar','Ingresar');

echo form_close();