@extends('layouts.header')
@section('titulo','Productos')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="fas fa-home"></i>
                    <h3 class="m-5">NO OLVIDAR CAMBIAR LOS ESTADOS DE TODOS LOS PRODUCTOS A "0", haciendo uso del boton correspondiente</h3>
                </div> --}}
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-home"></i>
                    <h4 class="alert-heading">Recuerda Actualizar el estado de los productos.</h4>
                    <p>Actualiza el estdo de todos los productos en "0" antes de que subas un excel con productos de stock base.</p>
                    <hr>
                    <p class="mb-0">ES DE TOTAL IMPORTANCIA REALIZAR ESTA ACCION ANTES DE CADA SUBIDA DE PRODUCTOS.</p>
                </div>
            </div>
            <div class="col-lg-12 card ibox">
                <div class="card-title ibox-title m-4">
                    <h3>Cargar productos</h3>
                </div>
                <div class="card-title ibox-title m-4">
                    <a class="btn btn-danger block text-white" role="button" href="{{ route('stockcero') }}"><strong>Cambiar estado de productos</strong></a>
                </div>
                <div class="card-body ibox-content">
                    <form method="POST" action="{{ route('cargaProducts') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <div class="input-group input-file" >
                                    <input type="file" name="file" class="form-control input-file" placeholder='Subir Archivo...' accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel,.csv" required/>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <br>
                                <button class="btn btn-primary block" type="submit"><strong>Guardar</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection