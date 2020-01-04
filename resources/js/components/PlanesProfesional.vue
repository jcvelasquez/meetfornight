<template>
<form action="">
  <!-- Start Box - Planes -->
  <div class="row">
    <div class="col-md-4">
      <div class="tipo-cuenta bg-tipo-plomo">
        <h2 class="titulo-tipo precio-morado">FREE</h2>

        <div class="precio-cuenta precio-morado">
          <span class="signo-precio">$</span>
          <span class="precio-grande">00</span>
          <div class="parte-tecer-precio">
            <span class="precio-decimal">.00</span>
            <span class="precio-tiempo">/Mensual</span>
          </div>
        </div>

        <div class="custom-control custom-radio custom-rb">
          <input
            type="radio"
            id="customRadio1"
            name="customRadio"
            class="custom-control-input"
            checked
          />
          <label class="custom-control-label" for="customRadio1"></label>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tipo-cuenta bg-tipo-cuenta">
        <div class="lateral-triangulo-paquetes">
          <img src="img/triangulo-beta-free.png" />
        </div>
        <h2 class="titulo-tipo precio-blanco">PREMIUM</h2>

        <div class="precio-cuenta precio-blanco">
          <span class="signo-precio">$</span>
          <span class="precio-grande">09</span>
          <div class="parte-tecer-precio">
            <span class="precio-decimal">.99</span>
            <span class="precio-tiempo">/Mensual</span>
          </div>
        </div>

        <div class="custom-control custom-radio custom-rb">
          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" />
          <label class="custom-control-label" for="customRadio2"></label>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tipo-cuenta bg-tipo-plomo">
        <div class="lateral-triangulo-paquetes">
          <img src="img/triangulo-beta-free.png" />
        </div>

        <h2 class="titulo-tipo precio-morado">PLATINIUM</h2>

        <div class="precio-cuenta precio-morado">
          <span class="signo-precio">$</span>
          <span class="precio-grande">09</span>
          <div class="parte-tecer-precio">
            <span class="precio-decimal">.99</span>
            <span class="precio-tiempo">/Mensual</span>
          </div>
        </div>

        <div class="custom-control custom-radio custom-rb">
          <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" />
          <label class="custom-control-label" for="customRadio3"></label>
        </div>
      </div>
    </div>
  </div>
  <!-- End Box - Planes -->

  <!-- Start Título -->
  <div class="titulo-planes">
    <h3 class="h3">Meses a Elegir</h3>
  </div>
  <!-- End Título -->

  <!-- Start Box - Planes -->
  <div class="row">
    <div class="col-md-4">
      <div class="tipo-cuenta bg-tipo-morado">
        <div class="circle-price">
          <span>-10%</span>
        </div>

        <div class="row">
          <div class="col-5 text-center">
            <span class="dia-plan morado">06</span>
            <span class="text-plan morado">meses</span>
          </div>

          <div class="col-7 text-center">
            <div class="precio-plan">
              <span class="text-plan rojo-plan">$9.99</span>
              <span class="text-plan morado">x mes</span>
            </div>
          </div>
        </div>

        <div class="custom-control custom-radio custom-rb">
          <input
            type="radio"
            id="mesRadio1"
            name="customRadioMes"
            class="custom-control-input"
            checked
          />
          <label class="custom-control-label" for="mesRadio1"></label>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tipo-cuenta bg-tipo-morado">
        <div class="circle-price">
          <span>-10%</span>
        </div>

        <div class="row">
          <div class="col-5 text-center">
            <span class="dia-plan morado">03</span>
            <span class="text-plan morado">meses</span>
          </div>

          <div class="col-7 text-center">
            <div class="precio-plan">
              <span class="text-plan rojo-plan">$9.99</span>
              <span class="text-plan morado">x mes</span>
            </div>
          </div>
        </div>

        <div class="custom-control custom-radio custom-rb">
          <input type="radio" id="mesRadio2" name="customRadioMes" class="custom-control-input" />
          <label class="custom-control-label" for="mesRadio2"></label>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tipo-cuenta bg-tipo-morado">
        <div class="circle-price">
          <span>-10%</span>
        </div>

        <div class="row">
          <div class="col-5 text-center">
            <span class="dia-plan morado">01</span>
            <span class="text-plan morado">meses</span>
          </div>

          <div class="col-7 text-center">
            <div class="precio-plan">
              <span class="text-plan rojo-plan">$9.99</span>
              <span class="text-plan morado">x mes</span>
            </div>
          </div>
        </div>

        <div class="custom-control custom-radio custom-rb">
          <input type="radio" id="mesRadio3" name="customRadioMes" class="custom-control-input" />
          <label class="custom-control-label" for="mesRadio3"></label>
        </div>
      </div>
    </div>
  </div>

  <div class="titulo-planes">
    <h3 class="h3">Beneficios</h3>
  </div>

  <div class="row">
    <div class="col-md-12">
      <ul class="lista-plan-beneficios">
        <li>Fotos</li>
        <li>Descripción</li>
        <li>Booster</li>
        <li>Enlace de tu página web</li>
        <li>Buzón de mensajería personalizado</li>
        <li>Panel de control moderno</li>
      </ul>

      <a href="free-perfil-creado.php" class="btn-acceder btn-plan">Iniciar</a>
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
