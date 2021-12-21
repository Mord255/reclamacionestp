<!doctype html>
<html lang="en">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('sidebar-07/css/style.css')}}">
    </head>
    <body>
		<div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar" class="active">
                <h1><a href="#" class="logo">F.</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="{{ request()->routeIs('home')? 'active' : '' }}">
                        <a href="{{ route('home') }}"><span class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="{{ request()->routeIs('cargarProductos')? 'active' : '' }}">
                        <a href="{{ route('cargarProductos') }}"><span class="fa fa-user"></span> Cargar Productos</a>
                    </li>
                    <li class="{{ request()->routeIs('cargarCategorias')? 'active' : '' }}">
                        <a href="{{ route('cargarCategorias') }}"><span class="fa fa-sticky-note"></span> Cargar Categorias</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cogs"></span> Services</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
                    </li>
                </ul>

                <div class="footer">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    </p>
                </div>
            </nav>
            <div id="content" class="p-4 p-md-5">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                            <i class="fa fa-bars"></i>
                            <span class="sr-only">Toggle Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cargar Tipo de Cambio de Dolar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form role="form" method="POST" action="{{ route('actualizarTipoCambio') }}">
                                @csrf
                                <div class="modal-header">
                                    <h3 class="modal-title" id="staticBackdropLabel">Actualizar Tipo de Cambio</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Actualizar el tipo de cambio del precio de compra y venta del dolar del dia</h6>
                                    <br>
                                    <div class="container">
                                        <div class="form-group">
                                            <label>Precio Venta:</label>
                                            <input type="number" placeholder="Precio Venta:" name="venta" class="form-control" step="any" value="{{ old('venta') }}">
                                            @error('venta')
                                                <div class="alert alert-danger" role="alert">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Precio Compra:</label>
                                            <input type="number" placeholder="Precio Compra:" name="compra" class="form-control" step="any" value="{{ old('compra') }}">
                                            @error('compra')
                                                <div class="alert alert-danger" role="alert">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @yield('contenido')

            </div>
		</div>
        <script src="{{asset('sidebar-07/js/jquery.min.js')}}"></script>
        <script src="{{asset('sidebar-07/js/popper.js')}}"></script>
        <script src="{{asset('sidebar-07/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('sidebar-07/js/main.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>