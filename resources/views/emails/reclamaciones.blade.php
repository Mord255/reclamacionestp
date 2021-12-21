<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Tiendapapa</title>
</head>
<body>
        <div class="container padd-bott-20">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="green" style="text-align: center;"> Libro de Reclamaciones</h2>
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
    
    @foreach($data as $key => $value)
        <hr>
        <p><b>1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE:</b></p>
        <p><b>Codigo del Reclamo: 000</b>{{$value->table_tp_reclamaciones_id}}</p>
        <p><b>Tipo de Documento del Reclamante: </b>{{$value->table_tp_reclamaciones_reclamante_tipo_documento}}</p>
        <p><b>Numero de Documento del Reclamante: </b>{{$value->table_tp_reclamaciones_reclamante_numero_documento}}</p>
        <p><b>Nombres del Reclamante: </b>{{$value->table_tp_reclamaciones_reclamante_nombres}}</p>
        <p><b>Apellido Paterno del Reclamante:</b>{{$value->table_tp_reclamaciones_reclamante_apellido_paterno}}</p>
        <p><b>Apellido Materno del Reclamante:</b>{{$value->table_tp_reclamaciones_reclamante_apellido_materno}}</p>
        <p><b>Direccion del Reclamante</b>{{$value->table_tp_reclamaciones_reclamante_direccion}}</p>
        <p><b>Departamento del Reclamante</b>{{$value->table_tp_reclamaciones_reclamante_departamento}}</p>
        <p><b>Provincia del Reclamante: </b>{{$value->table_tp_reclamaciones_reclamante_provincia}}</p>
        <p><b>Distrito del Reclamante: </b>{{$value->table_tp_reclamaciones_reclamante_distrito}}</p>
        <p><b>Numero de Telefono del Reclamante: </b>{{$value->table_tp_reclamaciones_reclamante_telefono}}</p>
        <p><b>Correo Electronico del Reclamante: </b>{{$value->table_tp_reclamaciones_reclamante_email}}</p>
        <hr>
        <p><b>2. IDENTIFICACIÓN DEL BIEN CONTRATADO:</b></p>
        <p><b>Identificacion de Bien Contratado: </b>{{$value->table_tp_reclamaciones_producto_tipo}}</p>
        <p><b>Monto Reclamado: </b>{{$value->table_tp_reclamaciones_producto_monto_producto}}</p>
        <p><b>Marca del Producto: </b>{{$value->table_tp_reclamaciones_producto_marca_producto}}</p>
        <p><b>Descripcion del Producto: </b>{{$value->table_tp_reclamaciones_producto_descripcion_producto}}</p>
        <hr>
        <p><b>3. DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR:</b></p>
        <p><b>Tipo de Reclamo: </b>{{$value->table_tp_reclamaciones_detalle_tipo}}</p>
        <p><b>Detalle del Reclamo: </b>{{$value->table_tp_reclamaciones_detalle_detalle}}</p>
        <p><b>Pedido/Número de Orden: </b>{{$value->table_tp_reclamaciones_detalle_pedido}}</p>
        <hr>
        <p><b>4. DATOS DEL APODERADO:</b></p>
        <p><b>El Reclamante es Menor de Edad: {{$value->table_tp_reclamaciones_apoderado_menor_edad}}</b></p>
        <p><b>Tipo de Documento del Apoderado: </b>{{$value->table_tp_reclamaciones_apoderado_tipo_documento}}</p>
        <p><b>Numero de Documento del Apoderado: </b>{{$value->table_tp_reclamaciones_apoderado_numero_documento}}</p>
        <p><b>Numero de Teléfono del Apoderado: </b>{{$value->table_tp_reclamaciones_apoderado_telefono}}</p>
        <p><b>Nombres del Apoderado: </b>{{$value->table_tp_reclamaciones_apoderado_nombres}}</p>
        <p><b>Apellidos del Apoderado: </b>{{$value->table_tp_reclamaciones_apoderado_apellidos}}</p>
        <hr>
        <p><b>5. OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR</b></p>
        <p><b>Reclamo: </b>Disconformidad relacionada a los Productos o Servicios.</p>
        <p><b>Queja: </b>Disconformidad no relacionada a los Productos o Servicios; o, malestar o descontento respecto a la atención al público.</p>
        <p><b>Destinatario(consumidor, proveedor o INDECOPI según corresponda)</b></p>
        <p><b>Fecha: </b>{{$value->table_tp_reclamaciones_fecha}}</p>
        <p><b>Firma del Proveedor:</b></p>
        <hr>
        <p><b>Acepta Políticas de de Términos de Tiendapapa: {{$value->table_tp_reclamaciones_politica_privacidad}}</b></p>
        <p><b>Acepta el tratamiento de datos para fines estadísticos y/o históricos: {{$value->table_tp_reclamaciones_tratamiento_datos}}</b></p>
    @endforeach

</body>
</html>