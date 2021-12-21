<!DOCTYPE html>
<html>
    <head>
        <title>Libro de Reclamaciones | Tiendapapa.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
        <!-- 1000hz-bootstrap-validator -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
        <script src="https://kit.fontawesome.com/7a63709b82.js"></script>
    </head>
    <body>


        <!--
          Below we include the Login Button social plugin. This button uses
          the JavaScript SDK to present a graphical Login button that triggers
          the FB.login() function when clicked.
        -->

        <!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button> -->

        <div id="status"></div>
        <div class="container-fluid">
            <div id="site-body" class="container fixed-nav ">
                <br>
                <br>
                <div class="" style="text-align:right;">
                    <a href="https://tiendapapa.com#colophon"><i class="fas fa-times" style="font-size:30px;"></i></a>
                </div>
                <div id="atg_store_main">
                    <div id="atg_store_contentContainer" >
                        <div id="atg_store_content" class="">
                            <form method="POST" action="{{ route('envioReclamacion') }}" id="form-register" name="form-register"  class="col-md-8 col-sm-12 form-horizontal" role="form" data-toggle="validator">
                                @csrf
                                <div class="MainContainerSection claimFormSection" id="MainContainer">
                                    <div class="container padd-bott-20">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="green" style="text-align: center;">
                                                    Libro de Reclamaciones</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container padd-bott-20">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p style="text-align: center;">FATHER DIGITAL PERU E.I.R.L., con RUC 20606898313<br/>
                                                    Dirección: JR. HUASCAR 184 MICAELA BASTIDAS, VILLA MARIA DEL TRIUNFO.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container padd-bott-20">
                                        <div class="row">
                                            <div class="col-lg-12" style="text-align: center;margin: 10px 0px;">
                                                <button type="button" class="btn btn-primary hidden-print" onclick="window.print();">
                                                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-12 col-sm-12 contact-form">
                                                    <h4 class="tl-contact-form">
                                                        Datos de la Persona que presenta el Reclamo
                                                        :
                                                    </h4>
                                                    <div class="col-md-8 col-sm-12 form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label" for="reclamante_tipo_documento">* Tipo de Documento</label>
                                                            <div class="col-sm-9">
                                                                <select id="reclamante_tipo_documento" name="reclamante_tipo_documento" class="form-control">
                                                                    <option value="ce">Carnet de Extranjería</option>
                                                                    <option value="dni" selected="selected" >DNI</option>
                                                                    <option value="passport">Pasaporte</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label" for="reclamante_numero_documento">
                                                                Número de documento:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input type="number" id="reclamante_numero_documento" maxlength="20" name="reclamante_numero_documento" value="" class="form-control" required>
                                                                <div class="help-block with-errors"></div>
                                                                @error('reclamante_numero_documento')
                                                                    <div class="alert alert-danger" role="alert">*{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label" for="reclamante_nombres">
                                                                Nombres:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input id="reclamante_nombres" maxlength="40" name="reclamante_nombres" value="" class="form-control" type="text" required>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label" for="reclamante_apellido_paterno">
                                                                Apellido Paterno:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input id="reclamante_apellido_paterno" maxlength="30" name="reclamante_apellido_paterno" value="" class="form-control" type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label" for="reclamante_apellido_materno">
                                                                Apellido Materno:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input id="reclamante_apellido_materno" maxlength="30" name="reclamante_apellido_materno" value="" class="form-control" type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label" for="reclamante_direccion">
                                                                Dirección:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input id="reclamante_direccion" maxlength="100" name="reclamante_direccion" value="" class="form-control" type="text" 
                                                                       placeholder="Avenida / Calle / Jiron / Pasaje / AAHH, Distrito, Provincia" required >
                                                            </div>
                                                        </div>
                                                        <div class="address_picker_group" data-stateid="stateSelect" data-stateselected="" id="addressPicker">
                                                            <div class="form-group" id="Region">
                                                                <label for="reclamante_departamento" class="col-sm-3 control-label">Departamento</label>
                                                                <div class="col-sm-5">
                                                                    <input id="reclamante_departamento" maxlength="30" name="reclamante_departamento" value="" class="form-control" type="text" required>  
                                                                </div>
                                                            </div>
                                                            <div class="address_picker_group form-group" id="Ciudad">
                                                                <label for="reclamante_provincia" class="col-sm-3 control-label"> Provincia</label>
                                                                <div class="col-sm-5">
                                                                    <input id="reclamante_provincia" maxlength="30" name="reclamante_provincia" value="" class="form-control" type="text" required>  
                                                                </div>
                                                            </div>
                                                            <div class="address_picker_group form-group" id="Comuna">
                                                                <label for="reclamante_distrito" class="col-sm-3 control-label"> Distrito</label>
                                                                <div class="col-sm-5">
                                                                    <input id="reclamante_distrito" maxlength="30" name="reclamante_distrito" value="" class="form-control" type="text" required>  
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="reclamante_telefono">
                                                                    Teléfono:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="reclamante_telefono" maxlength="10" name="reclamante_telefono" value="" class="form-control" type="number" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="reclamante_email">
                                                                    Email:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="reclamante_email" maxlength="60" name="reclamante_email" value="" class="form-control" type="email" required>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12 col-sm-12 contact-form">
                                                        <h4 class="tl-contact-form">
                                                            Información General:
                                                        </h4>
                                                        <div class="col-md-8 col-sm-12 form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-sm-3 col-xs-6 control-label" for="producto_businessType">
                                                                    Identificación del bien contratado:
                                                                </label>
                                                                <div class="col-sm-9  col-xs-6 ">
                                                                    <label class="radio-inline">
                                                                        <input name="producto_businessType" value="product" type="radio" checked="checked">
                                                                        Producto
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input name="producto_businessType" value="service" type="radio">
                                                                        Servicio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="producto_monto_reclamado">
                                                                    Monto Reclamado S/.:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="producto_monto_reclamado" maxlength="50" name="producto_monto_reclamado" value="" class="form-control" type="text" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="producto_marca">
                                                                    Marca:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="producto_marca" maxlength="50" name="producto_marca" value="" class="form-control" type="text" required>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="producto_descripcion">
                                                                    Descripción del producto:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <textarea id="producto_descripcion" maxlength="300" name="producto_descripcion" class="form-control" required></textarea></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12 col-sm-12 contact-form">
                                                        <h4 class="tl-contact-form">
                                                            Detalle del Reclamo:
                                                        </h4>
                                                        <div class="col-md-8 col-sm-12 form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-sm-3 col-xs-6 control-label" for="tipo_reclamo">
                                                                    Tipo:
                                                                </label>
                                                                <div class="col-sm-9  col-xs-6">
                                                                    <label class="radio-inline">
                                                                        <input name="tipo_reclamo" id="tipo_reclamo" value="reclamo" type="radio" checked="checked">Reclamo</label>
                                                                    <label class="radio-inline">
                                                                        <input name="tipo_reclamo" id="tipo_reclamo" value="queja" type="radio">Queja</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="detalle_reclamo">
                                                                    Detalle del Reclamo:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <textarea id="detalle_reclamo" maxlength="8000" name="detalle_reclamo" class="form-control" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="numero_pedido">Pedido / Número de orden:</label>
                                                                <div class="col-sm-9">
                                                                    <textarea id="numero_pedido" maxlength="300" name="numero_pedido" class="form-control" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12 col-sm-12 contact-form proxy-form">
                                                        <h4 class="tl-contact-form">
                                                            Datos del Apoderado:
                                                        </h4>
                                                        <div class="col-md-8 col-sm-12 form-horizontal">
                                                            <div class="form-group proxy-hide-show">
                                                                <label class="col-sm-3 col-xs-8 control-label checkbox" for="menor_edad">
                                                                    Menor de Edad</label>
                                                                <div class="col-sm-9  col-xs-4">
                                                                    <input id="menor_edad" name="menor_edad" value="SI" class="checkbox"  type="checkbox" onclick="$('.proxy-form .form-group:not(.proxy-hide-show)').toggleClass('hide')">
                                                                </div>
                                                            </div>
                                                            <div class="form-group hide" id="claimPage" data-isproxy="" data-claimid="">
                                                                <label class="col-sm-3 control-label" for="tipo_documento_edad"> * Tipo de Documento</label>
                                                                <div class="col-sm-9">
                                                                    <select id="tipo_documento_edad" name="tipo_documento_edad" class="form-control">
                                                                        <option value="">Sin Documento</option>
                                                                        <option value="Carnet de Extranjería">Carnet de Extranjería</option>
                                                                        <option value="DNI">DNI</option>
                                                                        <option value="Pasaporte">Pasaporte</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group hide">
                                                                <label class="col-sm-3 control-label" for="numero_documento_edad">
                                                                    Número de documento:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="numero_documento_edad" maxlength="13" name="numero_documento_edad" value="" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group hide">
                                                                <label class="col-sm-3 control-label" for="nombres_edad">
                                                                    Nombres:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="nombres_edad" maxlength="40" name="nombres_edad" value="" class="form-control" type="text">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group hide">
                                                                <label class="col-sm-3 control-label" for="apellidos_edad">
                                                                    Apellidos:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="apellidos_edad" maxlength="30" name="apellidos_edad" value="" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group hide">
                                                                <label class="col-sm-3 control-label" for="numero_telefono_edad">
                                                                    Número de Teléfono:
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id="numero_telefono_edad" maxlength="13" name="numero_telefono_edad" value="" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 contact-form1 proxy-form">
                                                    <div class="col-md-12 col-sm-12 form-horizontal">
                                                            <div class="form-group proxy-hide-show">
                                                                <label class="col-sm-12 col-xs-12 control-label checkbox" for="politicas" style="text-align: left;">
                                                                    <input id="politicas" name="politicas" value="SI" class="checkbox"  type="checkbox" required>
                                                                    Declaro que he leído y acepto la <a target="_blank" href="https://tiendapapa.com/privacy-policy-2">Política de Privacidad</a> 
                                                                    de Tiendapapa.com
                                                                </label>
                                                            </div>
                                                    </div>
                                                    <div class="col-12 div_politicas" style="padding-bottom: 10px;">
                                                        <a href="https://tiendapapa.com/terminos-y-condiciones/" style="font-weight: bold;text-decoration: underline;">Terminos y Condiciones</a>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 form-horizontal">
                                                            <div class="form-group proxy-hide-show">
                                                                <label class="col-sm-12 col-xs-12 control-label radio" for="chk_politicas_s" style="text-align: left;">
                                                                    <input id="chk_politicas_s" name="politicas_dt" value="SI ACEPTO" class="radio"  type="radio">
                                                                    SI ACEPTO el tratamiento de datos para fines estadísticos y/o históricos.
                                                                </label>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 form-horizontal">
                                                            <div class="form-group proxy-hide-show">
                                                                <label class="col-sm-12 col-xs-12 control-label radio" for="chk_politicas_n" style="text-align: left;">
                                                                    <input id="chk_politicas_n" name="politicas_dt" value="NO ACEPTO" class="radio"  type="radio">
                                                                    NO ACEPTO el tratamiento de datos para fines estadísticos y/o históricos.
                                                                </label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container ">
                                            <div class="row">
                                                <div class="form-group ">
                                                    <div class="col-sm-12 padd-bott-20 text-center">
                                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">ENVIAR</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12 col-sm-12 contact-form">
                                                        <p><strong>RECLAMO:</strong> Disconformidad relacionada a los productos o servicios. </p>
                                                        <p><strong>QUEJA:</strong> Disconformidad no relacionada a los productos o servicios o malestar o descontento respecto a la atención al público.</p>
                                                        <p>La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.</p>
                                                        <p>El provedor deberá dar respuesta al reclamo en un plazo no mayor de treinta (30) días calendario, pudiendo ampliar el plazo hasta por treinta (30) días más, previa comunicación al consumidor.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mensaje Enviado Correctamente.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        Su Reclamo se registro con Exito. Pronto nos estaremos comunicando.
                        Se le envio un mensaje a su correo electronico de confirmacion con los datos del fomrulario, a su vez se descargo automaticamente un archivo pdf con la misma informacion.
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Success Popup -->
        <div class="modal fade success-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        <h4 class="modal-title" id="myModalLabel">Libro de Reclamaciones</h4>
                    </div>
                    <div class="modal-body text-center">
                        <img src="https://d2ulnfq8we0v3.cloudfront.net/cdn/668207/skin/frontend/ultimo/default/images/logo-2020.jpeg">
                        <p class="lead">Su reclamo se registro con éxito, pronto nos estaremos comunicando</p>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Modal Error Popup -->
        <div class="modal fade success-popup" id="myModalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        <h4 class="modal-title" id="myModalLabel">Libro de Reclamaciones</h4>
                    </div>
                    <div class="modal-body text-center">
                        <img src="https://d2ulnfq8we0v3.cloudfront.net/cdn/668207/skin/frontend/ultimo/default/images/logo-2020.jpeg">
                        <p class="lead">Ocurrio un error en el registro, intentar nuevamente.</p>
                    </div>

                </div>
            </div>
        </div>
        <script>
            // $(document).ready(function () {
            //     $('#form-register').validator().on('submit', function (e) {
            //         if (e.isDefaultPrevented()) {
            //             // handle the invalid form...
            //             //alert('error');
            //         } else {
            //             // everything looks good!
            //             var data_user = $(this).serialize();
            //             $.ajax({
            //                 url: 'index.php',
            //                 data: data_user + '&action=InsertRegister',
            //                 type: 'POST',
            //                 success: function (data) {
            //                     //Cerrando modal de boostrap
            //                     //$('.modal-body').html(data);
            //                     if (data === 'ok') {
            //                         $("#myModal").modal('show');
            //                     } else {
            //                         $("#myModalError").modal('show');
            //                         //alert("Ocurrio un error en el registro, intentar nuevamente.");
            //                     }
            //                 }
            //             });
            //             e.preventDefault();
            //         }
                    
            //         event.preventDefault();
            //     });
            // });
        </script>
        <style>
            body{
                font-family: "Raleway", sans-serif !important
            }
            .container{padding-left: 0px;padding-right: 0px;}

            .tl-contact-form{
                background: #ffa400;
                border-radius: 5px;
                color: #fff;
                margin-bottom: 1em;
                padding: .5em;
            }
            .contact-form{
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 1.5em;
                padding: 15px;
            }
        </style>
    </body>
</html>