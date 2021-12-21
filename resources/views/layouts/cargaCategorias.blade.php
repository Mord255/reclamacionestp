@extends('layouts.header')
@section('titulo','Categorias')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card ibox">
                <div class="card-title ibox-title">
                    <h3>Cargar Categorias</h3>
                </div>
                <div class="card-body ibox-content">
                    <form method="POST" action="{{ route('cargaCategory') }}" role="form" enctype="multipart/form-data">
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