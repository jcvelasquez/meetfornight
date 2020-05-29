<div class="row justify-content-center cuerpo-perfil">
      <div class="col-lg-10 col-sm-12">

        <!-- Start Box - Planes -->
        <div class="row justify-content-center section_planes">
            @foreach($planes as $plan)
            <div class="col-md-4">
                <div class="tipo-cuenta {{$plan->fondo_plan}}">
                    <div class="lateral-triangulo-paquetes">
                        <img src="{{asset('img/'.$plan->triangulo_plan)}}">
                    </div>
                    <h2 class="titulo-tipo">{{$plan->nombre}} <span class="free-plus">{{$plan->small}}</span></h2>
                    <div class="precio-cuenta">
                        <span class="signo-precio">$</span>
                        <span class="precio-grande">{{$plan->cifra}}</span>
                        <div class="parte-tecer-precio">
                            <span class="precio-decimal">.{{$plan->decimales}}</span>
                            <span class="precio-tiempo">/{{$plan->periodo_plan}}</span>
                        </div>
                    </div>
                    <div class="custom-control custom-radio custom-rb container-radio">
                        <input type="radio" value="{{$plan->id}}" id="plan{{$plan->id}}" name="radioPlan" class="custom-control-input">
                        <label class="custom-control-label" for="plan{{$plan->id}}"></label>
                        <input type="hidden" name="plan_seleccionado" value="{{$plan->nombre_plan}}">
                        <input type="hidden" name="precio_seleccionado" value="{{$plan->precio_plan}}">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Box - Planes -->


        <div id="periodos_planes" class="hide">

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
                        <div class="col-4">
                        <span class="dia-plan morado">06</span>
                        <span class="text-plan morado">meses</span>
                        </div>

                        <div class="col-8">
                            <div class="precio-plan">
                                <span class="text-plan rojo-plan">$9.99</span>
                                <span class="text-plan morado">x mes</span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-control custom-radio custom-rb">
                        <input type="radio" id="mesRadio1" name="customRadioMes" class="custom-control-input" checked>
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
                        <div class="col-4">
                        <span class="dia-plan morado">03</span>
                        <span class="text-plan morado">meses</span>
                        </div>

                        <div class="col-8">
                            <div class="precio-plan">
                                <span class="text-plan rojo-plan">$9.99</span>
                                <span class="text-plan morado">x mes</span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-control custom-radio custom-rb">
                        <input type="radio" id="mesRadio2" name="customRadioMes" class="custom-control-input">
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
                        <div class="col-4">
                        <span class="dia-plan morado">01</span>
                        <span class="text-plan morado">meses</span>
                        </div>

                        <div class="col-8">
                            <div class="precio-plan">
                                <span class="text-plan rojo-plan">$9.99</span>
                                <span class="text-plan morado">x mes</span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-control custom-radio custom-rb">
                        <input type="radio" id="mesRadio3" name="customRadioMes" class="custom-control-input">
                        <label class="custom-control-label" for="mesRadio3"></label>
                    </div>

                    </div>
                </div>

            </div>
        <!-- End Box - Planes -->
        </div>



          <!-- Start Título -->
          <div class="titulo-planes">
              <h3 class="h3">Beneficios</h3>
          </div>
          <!-- End Título -->

          <!-- Start Lista -->
          <div class="row">
            <div class="col-md-12">
              <ul class="lista-plan-beneficios">
                  <li><!--<span class="rojo">5</span>--> Fotos</li>
                  <li><!--<span class="rojo">500 caracteres</span> de -->Descripción</li>
                  <li><!--Chat a <span class="rojo">$1 / 24Hrs</span>-->Booster</li>
                  <li>Enlace de tu página web</li>
                  <li>Buzón de mensajería personalizado</li>
                  <li>Panel de control moderno</li>
              </ul>
            </div>
          </div>
          <!-- End Lista -->
      </div>
    </div>