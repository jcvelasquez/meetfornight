<template>
  <form action="#" method="post">
    <h5 class="formulario-titulos">ALERTA:</h5>
    <p>El modulo ALERTA te permite verificar facilmente si ha habido informes negativos sobre un cliente que debes evitar para tu seguridad.</p>
    <p>El modulo ALERTA es una base de datos mantenida por la comunidad Meet For Night.</p>
    <div class="form-row">
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="apellido" placeholder="Apellido" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="id" placeholder="ID" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="text" class="form-control" name="celular" placeholder="Celular" />
        <small id="emailHelp" class="form-text text-muted informativo">Ejm: +51 947 827 191</small>
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <input type="email" class="form-control" name="email" placeholder="Email" />
      </div>
      <div class="col-lg-12 col-sm-12 espacio-campos">
        <textarea type="text" rows="5" class="form-control" name="razon" placeholder="Razón"></textarea>
        <small
          id="emailHelp"
          class="form-text text-muted espacio-campos informativo"
        >Sólo 150 caracteres</small>
      </div>
    </div>

    <div class="form-row espacio-campos-big">
      <button type="submit" class="btn btn-primary btn-busqueda-detallada">BUSCAR / AGREGAR</button>
    </div>
    


  <h5 class="formulario-titulos-fake">
    LISTA DE ALERTAS
    <br />(DE TODA LA COMUNIDAD MEET FOR NIGHT)
  </h5>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table">
          <thead class="cabecera-fake">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Email</th>
              <th scope="col">Razón</th>
            </tr>
          </thead>
          <tbody class="resultado-fake">
            <tr>
              <td>Lele lele lele</td>
              <td>123123 123123</td>
              <td>lele@gmail.com lele@gmail.com</td>
              <td>Sin comentario Sin comentario</td>
            </tr>
            <tr>
              <td>Lele</td>
              <td>123123</td>
              <td>lele@gmail.com</td>
              <td>Sin comentario</td>
            </tr>
            <tr>
              <td>Lele</td>
              <td>123123</td>
              <td>lele@gmail.com</td>
              <td>Sin comentario</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </form>
</template>
<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
