<?php

namespace App\Http\Controllers;
use Http;
use DB;
use App\reclamacionesModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\reclamacionesMailable;
// use Illuminate\Support\Facades\PDF;
use Barryvdh\DomPDF\Facade as PDF;

class reclamacionesController extends Controller{

    public function index(Request $request){
        // return back();
        return view('reclamaciones.index');
    }

    public function envioReclamacion(Request $request){
        $request->validate([
            'reclamante_tipo_documento' => 'required',
            'reclamante_numero_documento' => 'required',
            'reclamante_nombres' => 'required',
            'reclamante_apellido_paterno' => 'required',
            'reclamante_apellido_materno' => 'required',
            'reclamante_direccion' => 'required',
            'reclamante_departamento' => 'required',
            'reclamante_provincia' => 'required',
            'reclamante_distrito' => 'required',
            'reclamante_telefono' => 'required',
            'reclamante_email' => 'required',
            'producto_businessType' => 'required',
            'producto_monto_reclamado' => 'required',
            'producto_marca' => 'required',
            'producto_descripcion' => 'required',
            'tipo_reclamo' => 'required',
            'detalle_reclamo' => 'required',
            'numero_pedido' => 'required',
            'menor_edad' => 'nullable',
            'tipo_documento_edad' => 'nullable',
            'numero_documento_edad' => 'nullable',
            'nombres_edad' => 'nullable',
            'apellidos_edad' => 'nullable',
            'numero_telefono_edad' => 'nullable',
            'politicas' => 'required',
            'politicas_dt' => 'nullable',
        ]);

        // `table_tp_reclamaciones_reclamante_tipo_documento`, 
        // `table_tp_reclamaciones_reclamante_numero_documento`, 
        // `table_tp_reclamaciones_reclamante_nombres`, 
        // `table_tp_reclamaciones_reclamante_apellido_paterno`, 
        // `table_tp_reclamaciones_reclamante_apellido_materno`, 
        // `table_tp_reclamaciones_reclamante_direccion`, 
        // `table_tp_reclamaciones_reclamante_departamento`, 
        // `table_tp_reclamaciones_reclamante_provincia`, 
        // `table_tp_reclamaciones_reclamante_distrito`, 
        // `table_tp_reclamaciones_reclamante_telefono`, 
        // `table_tp_reclamaciones_reclamante_email`, 
        // `table_tp_reclamaciones_producto_tipo`, 
        // `table_tp_reclamaciones_producto_monto_producto`, 
        // `table_tp_reclamaciones_producto_marca_producto`, 
        // `table_tp_reclamaciones_producto_descripcion_producto`, 
        // `table_tp_reclamaciones_detalle_tipo`, 
        // `table_tp_reclamaciones_detalle_detalle`, 
        // `table_tp_reclamaciones_detalle_pedido`, 
        // `table_tp_reclamaciones_apoderado_menor_edad`, 
        // `table_tp_reclamaciones_apoderado_tipo_documento`, 
        // `table_tp_reclamaciones_apoderado_numero_documento`, 
        // `table_tp_reclamaciones_apoderado_telefono`, 
        // `table_tp_reclamaciones_apoderado_nombres`, 
        // `table_tp_reclamaciones_apoderado_apellidos`, 
        // `table_tp_reclamaciones_politica_privacidad`, 
        // `table_tp_reclamaciones_tratamiento_datos`

        reclamacionesModel::nuevoReclamo(
        request('reclamante_tipo_documento'),
        request('reclamante_numero_documento'),
        request('reclamante_nombres'),
        request('reclamante_apellido_paterno'),
        request('reclamante_apellido_materno'),
        request('reclamante_direccion'),
        request('reclamante_departamento'),
        request('reclamante_provincia'),
        request('reclamante_distrito'),
        request('reclamante_telefono'),
        request('reclamante_email'),
        request('producto_businessType'),
        request('producto_monto_reclamado'),
        request('producto_marca'),
        request('producto_descripcion'),
        request('tipo_reclamo'),
        request('detalle_reclamo'),
        request('numero_pedido'),
        request('menor_edad'),
        request('tipo_documento_edad'),
        request('numero_documento_edad'),
        request('numero_telefono_edad'),
        request('nombres_edad'),
        request('apellidos_edad'),
        request('politicas'),
        request('politicas_dt')
        );

        $id = reclamacionesModel::lastId();
        $data = reclamacionesModel::mostrarReclamo($id[0]->lastId);
        // $contenedor = [] ;

        // foreach ($data as $key => $value) {
        //     $contenedor = $value ;
        // }

        // $informacion = (array)$contenedor ;

        // dd($informacion);

        // // dd((array)$contenedor->table_tp_reclamaciones_reclamante_tipo_documento);

        // foreach ($data as $key => $value) {
        //     $correo = $value->table_tp_reclamaciones_reclamante_email;
        // }

        

        // Mail::send('emails/reclamaciones', $informacion, function ($mail) use ($informacion,$pdf) {
        //     $remitente =$informacion["table_tp_reclamaciones_reclamante_email"];
        //     $mail->from('atencionalcliente@tiendapapa.com', 'Tiendapapa');
        //     $mail->Subject('Libro de Reclamaciones');
        //     $mail->to($remitente);
        //     $mail->attachData($pdf->output(),'libro-reclamaciones-.pdf');
        // });

        Mail::to($data[0]->table_tp_reclamaciones_reclamante_email)->send(new reclamacionesMailable($data));
        
        $pdf = PDF::loadView('emails/reclamaciones', compact("data"));
        return $pdf->download('libro-reclamaciones.pdf');
    }

    public function cargarpdf(Request $request){
        
        $data = reclamacionesModel::mostrarReclamo(2);

        $pdf = \PDF::loadView('emails/prueba', $data);

        // return $pdf->download('archivo.pdf');
    
        return $pdf->stream('archivo.pdf');
    }

}
