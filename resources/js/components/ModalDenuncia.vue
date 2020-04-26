<template>
    <!--MODAL DENUNCIAR-->
    <div class="modal fade bd-example-modal-lg" id="denunciar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header busqueda-header">
            <h5 class="modal-title titulo-denunciar" id="exampleModalLabel"><i class="icon-danger espacio-busqueda espacio-danger"></i>DENUNCIAR</h5>
            <button type="button" class="close x-busqueda-detallada" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

            <form>
                <h5 class="formulario-titulos">Ayúdanos marcando este anuncio si piensas que:</h5>
                <div class="form-row denuciar-colum">
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                    <input type="radio" id="esta-repetido" name="opciones-denunciar" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="esta-repetido">Está repetido</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                    <input type="radio" id="es-una-estafa" name="opciones-denunciar" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="es-una-estafa">Es una estafa</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                    <input type="radio" id="el-telefono-es-incorrecto" name="opciones-denunciar" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="el-telefono-es-incorrecto">El teléfono es incorrecto</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                    <input type="radio" id="es-profesional-y-dice-ser-un-particular" name="opciones-denunciar" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="es-profesional-y-dice-ser-un-particular">Es profesional y dice ser un particular</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos">
                    <input type="radio" id="las-fotos-son-falsas" name="opciones-denunciar" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="las-fotos-son-falsas">Las fotos son falsas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg col-md-12 col-sm-12 espacio-campos tam-especificalo">
                    <input type="radio" id="otras-opciones" name="opciones-denunciar" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio" for="otras-opciones">Otros</label>
                    <div class="area-especificalo">
                    <span>Especificalo</span>
                    <textarea type="text" class="form-control espacio-campos"  rows="5" name="especificalo"></textarea>
                    </div>
                </div>
                </div>
                <div class="form-row">
                <button type="submit" class="btn btn-primary btn-busqueda-detallada">DENUNCIAR</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
