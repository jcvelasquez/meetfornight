@extends('main')

@section('title', 'Créditos')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')

<form action="#" method="post">

              <div class="bloques-de-perfil">
                <h5 class="formulario-titulos">CRÉDITOS:</h5>
                <p>Los créditos valen para comprar tus boosters y así mejorar la visibilidad del anuncio para que tu negocio sea más redondo y lucrativo.</p>
                <p>Cada vez que utilices un <strong class="precio-morado">BOOSTER</strong> se consumirán 1 o 2 créditos en función del plan que hayas elegido.<!-- Los créditos pueden ser adquiridos por US$0,50 iva/igv incluido.--></p>
                <p class="espacio-campos">Con tus créditos podrás hacer una gestión eficiente de tu cuenta.</p>
              </div>
              <div class="bloques-de-perfil">
                <h6 class="total-actual formulario-titulos">Dispones actualmente de <span>" 20 "</span> créditos en tu cuenta.</h6>
                <div class="row">
                  <div class="col-lg-12 form-row">
                      <label for="inputPassword" class="col-form-label formulario-titulos tamano-pequeno">Créditos para comprar</label>
                      <div class="col-lg-2 espaciado-mb">
                        <select type="text" class="form-control" id="inputPassword" name="cuantos-quieres-comprar">
                          <option value="10">10</option>
                          <option value="20">20</option>
                          <option value="30">30</option>
                          <option value="40">40</option>
                          <option value="50">50</option>
                          <option value="60">60</option>
                        </select>
                      </div>
                      <label for="inputPassword" class="col-form-label formulario-titulos tamano-pequeno">Total</label>
                      <div class="input-group espaciado-mb mb-2 col-lg-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" value="100" disabled="">
                      </div>
                  </div>
                </div>
                <h5 class="formulario-titulos">MÉTODOS DE PAGO:</h5>
                  <div class="row">
                    <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
                      <input type="radio" id="tatuaje(s)-si" name="tatuaje(s)" class="custom-control-input">
                      <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-si">Tarjetas de crédito o débito bancario <img src="img/tarjetas.jpg" class="cards"></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
                      <input type="radio" id="tatuaje(s)-no" name="tatuaje(s)" class="custom-control-input">
                      <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-no"><img src="img/paypal-logo.png" class="paypal"></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
                      <input type="radio" id="tatuaje(s)-re" name="tatuaje(s)" class="custom-control-input">
                      <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-re"><i class="icon-credit-cards esp-icono-bio"></i> Deposito Bancario</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-12 col-md-12 col-sm-12 espacio-campos">
                      <input type="radio" id="tatuaje(s)-re" name="tatuaje(s)" class="custom-control-input">
                      <label class="custom-control-label custom-control-label-espacio" for="tatuaje(s)-re"><i class="icon-credit-cards esp-icono-bio"></i> Pago en Efectivo</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 form-row">
                      <label for="inputPassword" class="col-form-label formulario-titulos tamano-pequeno">Código Promocional </label>
                      <div class="col-lg-2 espaciado-mb">
                        <input type="text" class="form-control" id="inlineFormInputGroup" value="457DABCCC">
                      </div>
                    </div>
                  </div>

                  <!--<div class="row">
                    <div class="col-lg-12 form-row centro">
                      <button type="submit" class="btn btn-primary btn-red">Validar</button>
                    </div>
                  </div>-->
                  <div class="bloques-de-perfil">
                	 <button type="submit" class="btn btn-primary btn-espacio-fuc btn-tarjeta-credito"><span>VALIDAR</span></button>
              	  </div>

              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="historico espacio-campos">Histórico de los créditos</div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="cabecera-fake">
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Créditos contratados</th>
                            <th scope="col">Total Pagado ($)</th>
                          </tr>
                        </thead>
                        <tbody class="resultado-fake">
                          <tr>
                            <td>Booster</td>
                            <td>05:30 pm</td>
                            <td>18/11/2018</td>
                            <td>80</td>
                            <td>160</td>
                          </tr>
                          <tr>
                            <td>Booster</td>
                            <td>05:30 pm</td>
                            <td>18/11/2018</td>
                            <td>80</td>
                            <td>-</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    </div>
                </div>
      

          </form>

@endsection