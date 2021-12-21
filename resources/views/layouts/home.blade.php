@extends('layouts.header')
@section('titulo','Home')

<link rel="stylesheet" href="{{ asset('tables/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('tables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('tables/responsive.bootstrap4.min.css') }}">
<script src="{{ asset('tables/jquery-3.5.1.js') }}" ></script>
<script src="{{ asset('tables/jquery.dataTables.min.js') }}" ></script>
<script src="{{ asset('tables/dataTables.bootstrap4.min.js') }}" ></script>
<script src="{{ asset('tables/dataTables.responsive.min.js') }}" ></script>
<script src="{{ asset('tables/responsive.bootstrap4.min.js') }}" ></script>
{{-- se hace uso de un helper llamado funcionesReglasNegocioHome de donde se obtienen las funciones utilizadas (precioVenta,precioLista,precioVentaY) --}}
@section('contenido')
    <div class="table-responsive">
        <table id="example" class="table table-striped footable table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Marca</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    {{-- <th>Costo Full Dolares</th> --}}
                    <th>Costo Full Soles</th>
                    <th>Precio Oferta Y</th>
                    <th>Precio Oferta X</th>
                    <th>Precio Venta</th>
                    <th>Precio Lista</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $value->table_tp_products_codigo }}</td>
                        <td>{{ $value->table_tp_products_marca }}</td>
                        <td>{{ $value->table_tp_products_nombre }}</td>
                        <td>{{ $value->table_tp_category_categoria }}</td>
                        <td>{{ $value->table_tp_products_stock }}</td>
                        {{-- <td>{{ round($value->table_tp_products_costo_full_dolares,2,PHP_ROUND_HALF_UP) }}</td> --}}
                        <td>{{ round($value->table_tp_products_costo_full_soles,2,PHP_ROUND_HALF_UP) }}</td>
                        <td>{{ round(precioOfertaY($value->table_tp_products_costo_full_soles,$value->table_tp_category_categoria),2,PHP_ROUND_HALF_UP) }}</td>
                        <td>{{ round($value->table_tp_products_precio_x,2,PHP_ROUND_HALF_UP) }}</td>
                        <td>{{ round(precioVenta($value->table_tp_products_costo_full_soles,$value->table_tp_category_categoria),2,PHP_ROUND_HALF_UP) }}</td>
                        <td>{{ round(precioLista(precioVenta($value->table_tp_products_costo_full_soles,$value->table_tp_category_categoria)),2,PHP_ROUND_HALF_UP) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <<th>Codigo</th>
                    <th>Marca</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    {{-- <th>Costo Full Dolares</th> --}}
                    <th>Costo Full Soles</th>
                    <th>Precio Oferta Y</th>
                    <th>Precio Oferta X</th>
                    <th>Precio Venta</th>
                    <th>Precio Lista</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <script>
        $('#example').DataTable({
            responsive: true,
            autoWidth: false,
            "language":{
                "lengthMenu" : "Mostrar _MENU_ registros por pagina",
                "zeroRecords" : "No hay Informacion - Intente Nuevamente",
                "info" : "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty" : "No hay data",
                "infoFiltered" : "(filtrado de _MAX_ registros totales)",
                'search' : 'Buscar:',
                'paginate' : {
                    'next' : 'Siguiente',
                    'previous' : 'Anterior'
                }
            }
        });
    </script>
@endsection

