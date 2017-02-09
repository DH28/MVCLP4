<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>login</title>  
</head>

<body>
<h2>Login</h2>
  <form  action="Welcome/login" method="post">
  <div>
    <label  for="username">Usuario</label><br>
    <input id="username"   type='text' name="nombre" autocomplete="off" placeholder='usuario'>
  </div><br>
  <div>
    <label for="password">Contraseña</label><br>
    <input id="password" placeholder='Password' type='password' name="clave">
  </div><br>
  <input type='submit' value='Ingresar'>
</form>
<h4><em>Trabajo de lp4</em></h4>
</body>
</html>