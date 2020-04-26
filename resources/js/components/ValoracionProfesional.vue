<template>
  <form action="#" method="post">
    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">VALORACIÓN:</h5>
      <p>La valoración te permite saber la calidad del servicio que estás dando a tus clientes y la opinión que tienen sobre tu perfil (fotos de tu anuncio). Además, estás valoraciones serán visibles para todos los clientes, tu éxito también dependerá de la valoración que hagan de ti y del trato que les das.</p>

      <p>
        <span class="rojo">
          <strong>IMPORTANTE:</strong>
        </span> Para que ellos te puedan valorar tendrás que enviar tú mismo el formulario de valoración a tus clientes directamente a su correo a través del botón
        <strong class="precio-morado">"ENVIAR MAIL"</strong> o a su "WhatsApp" copiando y pegando la URL que te hemos atribuido con el botón
        <strong class="precio-morado">"COPIAR LINK"</strong>.
      </p>
    </div>

    <div class="bloques-de-perfil">
      <div class="bloque-estadistica">
        <div class="estadistica-datos">
          <i class="icon-star tam-icon-grande"></i>
          <div class="info-estadistica">
            <span class="inf-estadistica-num">300</span>
            <span class="inf-estadistica">
              SERVICIOS
              <br />VALORADOS
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <div class="col-lg-12 casilla-valoracion">
        <span>AMABILIDAD</span>
        <div class="puntaje-estrella">
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <span>5 Ptos.</span>
        </div>
      </div>
      <div class="col-lg-12 casilla-valoracion">
        <span>SENSUALIDAD</span>
        <div class="puntaje-estrella">
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-plomo"></i>
          <span>4 Ptos.</span>
        </div>
      </div>
      <div class="col-lg-12 casilla-valoracion">
        <span>CONVERSACIÓN</span>
        <div class="puntaje-estrella">
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-plomo"></i>
          <i class="icon-star precio-plomo"></i>
          <span>3 Ptos.</span>
        </div>
      </div>
      <div class="col-lg-12 casilla-valoracion">
        <span>DIVERSIÓN</span>
        <div class="puntaje-estrella">
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-plomo"></i>
          <span>4 Ptos.</span>
        </div>
      </div>
      <div class="col-lg-12 casilla-valoracion">
        <span>CORRESPONDE A LA(S) FOTO(S)</span>
        <div class="puntaje-estrella">
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-morado"></i>
          <i class="icon-star precio-plomo"></i>
          <i class="icon-star precio-plomo"></i>
          <i class="icon-star precio-plomo"></i>
          <span>2 Ptos.</span>
        </div>
      </div>
    </div>

    <div class="bloques-de-perfil">
      <h5 class="formulario-titulos">ENVIAR FORMULARIO DE VALORACIÓN:</h5>
      <p>Elige al cliente que deseas que te evalue.</p>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 espacio-campos">
          <input type="email" class="form-control" name="email" placeholder="Email" />
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <button type="submit" class="btn btn-primary btn-busqueda-detallada">Enviar mail</button>
        </div>
      </div>
      <div class="linea-valor"></div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 espacio-campos">
          <input
            type="text"
            class="form-control bg-in"
            name="url"
            placeholder="Link"
            value="https://www.meetfornight.com/35345647"
          />
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <button type="submit" class="btn btn-primary btn-rojo">Copiar Link</button>
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
