<div></div>
<h2>Actualizar Datos</h2>
<form method="post" action="<?php echo base_url()?>Empleado/guardar">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <label>Nombre</label><br>
  <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>"><br><br>
  <label>Apellidos</label><br>
  <input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>"><br><br>
  <label>clave</label><br>
  <input type="text" name="clave" placeholder="Clave" value="<?php echo $clave; ?>"><br><br>
  <button>Gurdar</button>
</form>
