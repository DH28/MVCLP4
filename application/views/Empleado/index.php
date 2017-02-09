<div></div>
<div></div>
<h2>Lista de empleados</h2>
<div></div>
<a href="<?php echo base_url()?>Empleado/nuevo"><button>Nuevo Empleado</button></a>
  <table>
    <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Clave</th>
      <th>Accion</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($empleado as $value) { ?>
    <tr>
    <input type="hidden" name="id" value="<?php $id = $value->u_id;?>">
          <td><?php echo $id; ?></td>
          <td><?php echo $value->u_nombre; ?> </td>
          <td><?php echo $value->u_apellidos; ?> </td>
          <td><?php echo $value->u_clave; ?> </td>
          <td>
        <a href="<?php echo base_url();?>Empleado/modificar?id=<?php echo $id; ?>"><button>Editar</button></a>
        <a href="<?php echo base_url();?>Empleado/eliminar?id=<?php echo $id; ?>"><button>Eliminar</button></a>
      </td>
    </tr>
    <?php } ?>
    </tbody>
  </table>