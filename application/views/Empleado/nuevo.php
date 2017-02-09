<div></div>
<h2>Registrar Datos</h2>
<div></div>
<form method="post" action="<?php echo base_url()?>Empleado/guardar">
  <input type="hidden" name="id">
  <label>Nombre</label><br>
  <input type="text" name="nombre" placeholder="Nombre" required><br><br>
  <label>Apellidos</label><br>
  <input type="text" name="apellidos" placeholder="Apellidos" required><br><br>
  <label>clave</label><br>
  <input type="password" name="clave" placeholder="Clave" required><br><br>
  <button>Gurdar</button>
</form>