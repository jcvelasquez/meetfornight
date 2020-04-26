 <!-- Start Opciones -->

<!--  <div class="row justify-content-center cuerpo-perfil mb-4">

    <div class="custom-control custom-radio custom-control-inline custom-rb-plan">
      <input type="radio" id="btnRadio1" name="customRadioS3" class="custom-control-input" checked>
      <label class="custom-control-label rojo" for="btnRadio1">Preseleccionado</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline custom-rb-plan">
      <input type="radio" id="btnRadio2" name="customRadioS3" class="custom-control-input">
      <label class="custom-control-label" for="btnRadio2">Manual</label>
    </div>

</div>
 -->
<!-- End Opciones -->

<div class="row justify-content-center cuerpo-perfil">
      <div class="col-lg-8 col-sm-12">
          <p><strong class="rojo-importante">Anotación importante</strong></p>
            <p>Si algun servicio especial que brindas, no aparecere en las listas <strong class="precio-morado">podrá agregarlo desde su perfil </strong> una vez que se haya registrado.</p>
            <p>Especifique sus <strong class="precio-morado">servicios de acompañante</strong> a continuación</p>

            <div class="row">

              <div class="col-lg-6 col-sm-12 espacio-campos">
                <div class="cuadro-servicios">
                <h5 class="formulario-titulos">MASAJES:</h5>
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">

                  @foreach($servicios as $ser)
                     @if($ser->categoria_servicio == 'MASAJES')
                      <div class="form-group checksito-total">
                          <input class="inp-cbx always-validate" data-servicio="{{$ser->nombre_servicio}}" id="masa{{$ser->id}}" name="masajes[]" value="{{$ser->id}}" type="checkbox" style="display: none;"/>
                          <label class="cbx" for="masa{{$ser->id}}">
                            <span>
                              <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                              </svg>
                            </span>
                            <span>{{$ser->nombre_servicio}}</span>
                          </label>
                        </div>
                     @endif
                  @endforeach

                  </div>
                </div>
                </div>
              </div>



              <div class="col-lg-6 col-sm-12 espacio-campos">
                <div class="cuadro-servicios">
                <h5 class="formulario-titulos">PRELIMINARES:</h5>
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">
                    @foreach($servicios as $ser)
                      @if($ser->categoria_servicio == 'PRELIMINARES')
                        <div class="form-group checksito-total">
                            <input class="inp-cbx always-validate" data-servicio="{{$ser->nombre_servicio}}" id="preli{{$ser->id}}" name="preliminares[]" value="{{$ser->id}}" type="checkbox" style="display: none;"/>
                            <label class="cbx" for="preli{{$ser->id}}">
                              <span>
                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg>
                              </span>
                              <span>{{$ser->nombre_servicio}}</span>
                            </label>
                          </div>
                      @endif
                    @endforeach             
                  </div>
                </div>
                </div>
              </div>



              <div class="col-lg-6 col-sm-12 espacio-campos">
                <div class="cuadro-servicios">
                <h5 class="formulario-titulos">ÍNTIMO:</h5>
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">
                    @foreach($servicios as $ser)
                        @if($ser->categoria_servicio == 'INTIMO')
                          <div class="form-group checksito-total">
                              <input class="inp-cbx always-validate" data-servicio="{{$ser->nombre_servicio}}" id="inti{{$ser->id}}" name="intimos[]" value="{{$ser->id}}" type="checkbox" style="display: none;"/>
                              <label class="cbx" for="inti{{$ser->id}}">
                                <span>
                                  <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                  </svg>
                                </span>
                                <span>{{$ser->nombre_servicio}}</span>
                              </label>
                            </div>
                        @endif
                    @endforeach 
                  </div>
                </div>
                </div>
              </div>



              <div class="col-lg-6 col-sm-12 espacio-campos">
                <div class="cuadro-servicios">
                <h5 class="formulario-titulos">OTROS SERVICIOS:</h5>
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">

                    @foreach($servicios as $ser)
                        @if($ser->categoria_servicio == 'OTROS')
                          <div class="form-group checksito-total">
                              <input class="inp-cbx always-validate" data-servicio="{{$ser->nombre_servicio}}" id="otros{{$ser->id}}" name="otros[]" value="{{$ser->id}}" type="checkbox" style="display: none;"/>
                              <label class="cbx" for="otros{{$ser->id}}">
                                <span>
                                  <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                  </svg>
                                </span>
                                <span>{{$ser->nombre_servicio}}</span>
                              </label>
                            </div>
                        @endif
                    @endforeach 
                  </div>
                </div>
                </div>
              </div>



              <div class="col-lg-6 col-sm-12 espacio-campos">
                <div class="cuadro-servicios">
                <h5 class="formulario-titulos">FETICHE:</h5>
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">

                    @foreach($servicios as $ser)
                        @if($ser->categoria_servicio == 'FETICHE')
                          <div class="form-group checksito-total">
                              <input class="inp-cbx always-validate" data-servicio="{{$ser->nombre_servicio}}" id="feti{{$ser->id}}" name="fetiches[]" value="{{$ser->id}}" type="checkbox" style="display: none;"/>
                              <label class="cbx" for="feti{{$ser->id}}">
                                <span>
                                  <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                  </svg>
                                </span>
                                <span>{{$ser->nombre_servicio}}</span>
                              </label>
                            </div>
                        @endif
                    @endforeach 

                  </div>
                </div>
                </div>
              </div>



              <div class="col-lg-6 col-sm-12 espacio-campos">
                <div class="cuadro-servicios-especial">
                <h5 class="formulario-titulos">DISCAPACITADOS:</h5>
                <div class="form-row">
                  <div class="col-lg-12 col-sm-12">

                    @foreach($servicios as $ser)
                        @if($ser->categoria_servicio == 'DISCAPACITADOS')
                          <div class="form-group checksito-total">
                              <input class="inp-cbx always-validate" data-servicio="{{$ser->nombre_servicio}}" id="disca{{$ser->id}}" name="discapacitados[]" value="{{$ser->id}}" type="checkbox" style="display: none;"/>
                              <label class="cbx" for="disca{{$ser->id}}">
                                <span>
                                  <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                  </svg>
                                </span>
                                <span>{{$ser->nombre_servicio}}</span>
                              </label>
                            </div>
                        @endif
                    @endforeach
 
                 </div>
                </div>
                </div>
              </div>
            </div>
      </div>
    </div>