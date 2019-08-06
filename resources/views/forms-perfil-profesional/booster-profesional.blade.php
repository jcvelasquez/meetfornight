
@extends('main')

@section('title', 'Booster')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<form action="#" method="post">
              <div class="bloques-de-perfil">
                <h5 class="formulario-titulos">BOOSTER:</h5>
                <p><strong class="precio-morado">EL BOOSTER</strong> te permite propulsar tu anuncio nuevamente a las primeras posiciones y multiplicar de esta manera la visibilidad de tu anuncio y aumentar el número de contactos.</p>
                <p>Recuerda que cuando publicas un anuncio este va perdiendo posiciones en función de las nuevas inscripciones y/o de los <strong class="precio-morado">BOOSTERS</strong> utilizados por las demás personas de la comunidad Meet For Night.</p>
                <p>El servicio <strong class="precio-morado">BOOSTER</strong> sube automáticamente tu anuncio a las primeras posiciones cada 1,2,3,6,24 o 48 horas de forma automática pero también lo podrías hacer manualmente si así lo deseas y elegir los días y la horas que mejor consideres.</p>
                <p>Los anuncios que aparecen marcados con este símbolo <i class="icon-podium fucsia"></i> se mantienen por encima del resto de los anuncios durante algún tiempo (en función de la saturación de la categoría).</p>
                <p>Por tanto, podrás utilizar los <strong class="precio-morado">BOOSTERS</strong> cada vez que lo desees para darle un impulso a tu anuncio.</p>

                <p>Si estas interesado sigue estos pasos:</p>
              </div>

              <div class="bloques-de-perfil">
                <div class="row">
                  <div class="col-lg-12 col-sm-12 form-row espacio-campos">
                    <h6 class="total-actual formulario-titulos">Dispones actualmente de <span>" 20 "</span> crédito(s) y te permite hacer <span>" 10 "</span> booster(s)</h6>
                  </div>
                  <div class="col-lg-12 col-sm-12 form-row espacio-campos">
                    <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-sm-12 espacio-campos form-row-no borde-abajo">
                      <input type="radio" id="frecuencia" name="elige" class="custom-control-input">
                      <label class="custom-control-label custom-control-label-espacio" for="frecuencia">
                        <h3 class="formulario-titulos tamano-pequeno">Frecuencia Automática</h3>
                        <div class="espacio-campos">
                          <select type="text" class="form-control auto-width" id="inputPassword">
                            <option value="Cada 15 min">Cada 15 min</option>
                            <option value="Cada 30 min">Cada 30 min</option>
                            <option value="Cada hora">Cada hora</option>
                            <option value="Cada 2 horas">Cada 2 horas</option>
                            <option value="Cada 3 horas">Cada 3 horas</option>
                            <option value="Cada 4 horas">Cada 4 horas</option>
                            <option value="Cada 6 horas">Cada 6 horas</option>
                            <option value="Cada día">Cada día</option>
                            <option value="Cada 48">Cada 2 días</option>
                          </select>
                        </div>
                         <span class="aparecer">Desactivar Booster por la noche (De 00:00 a 9:00am)</span>
                        <div class="form-row">
                  <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="customRadioInline1">Si</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                    <input type="radio" id="customRadioInline5" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="customRadioInline5">No</label>
                  </div>
                </div>
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-sm-12 form-row">
                    <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-sm-12 espacio-campos">
                      <input type="radio" id="manualmente" name="elige" class="custom-control-input">
                      <label class="custom-control-label custom-control-label-espacio" for="manualmente">
                        <h3 class="formulario-titulos tamano-pequeno">Frecuencia Manual</h3>

                        <div class="horizontal">
                          <label for="inputPassword" class="col-form-label formulario-titulos tamano-pequeno esp-radio">Fecha</label>
                          <div class="espacio-campos esp-radio">
                            <input type="date" class="form-control icono-calendario" id="inputPassword">
                          </div>
                          <label for="inputPassword" class="col-form-label formulario-titulos tamano-pequeno esp-radio">Hora</label>
                          <div class="espacio-campos esp-radio">
                            <input type="text" class="form-control" id="inputPassword" value="00:00">
                          </div>
                          <div class="espacio-campos esp-radio">
                            <select type="text" class="form-control" id="inputPassword">
                              <option value="am">am</option>
                              <option value="pm">pm</option>
                            </select>
                          </div>
                          <div class="espacio-campos">
                            <button type="button" class="btn btn-primary x-circulo"><i class="fa fa-times" aria-hidden="true"></i></button>
                          </div>
                        </div>
                        <div class="espacio-campos">
                          <button type="button" class="btn btn-primary mas-cuadrado"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bloques-de-perfil">
                <button type="submit" class="btn btn-primary btn-espacio-fuc btn-tarjeta-credito"><i class="icon-credit-cards esp-icono-bio"></i><span>COMPRAR CRÉDITOS</span></button>
              </div>

              <p>El uso de este servicio incrementa las posibilidades de éxito de tu anuncio pero no lo garantiza. Si quiere tener éxito la oferta debe ser competitiva.</p>
              <p>Para evitar gastar tus créditos en horas en las que no hay tantos usuarios conectados a la página, te aconsejamos no usar tus boosters entre las 00:00 y las 09:00 am.</p>
              <p>Si los anuncios son eliminados el servicio de booster se detiene automáticamente. También puede ser detenido manualmente. Y los créditos en la cuenta no utilizados se reembolsarían.</p>

              <div class="row">
                <div class="col-md-12">
                    <div class="historico espacio-campos">Histórico de los booster</div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="cabecera-fake">
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Fecha</th>
                          </tr>
                        </thead>
                        <tbody class="resultado-fake">
                          <tr>
                            <td>Booster activado</td>
                            <td>05:30 pm</td>
                            <td>18/11/2018</td>
                          </tr>
                          <tr>
                            <td>Booster activado</td>
                            <td>05:30 pm</td>
                            <td>18/11/2018</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
          </form>

@endsection