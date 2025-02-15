@extends("layouts.app")

@section("titulo")
    <title>ShareCar - CrearConductor</title>
@endsection

@section("contenido")

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="encabezado">
        <h1>Registro de nuevo conductor</h1>
    </div>

    <div id="formulario" class="d-flex justify-content-center align-items-center">
    <form action="{{route('conductores.store')}}" method="post">
        @csrf
        <div class="form-group mt-3 p-0">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{old('nombre')}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{old('apellidos')}}">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{old('dni')}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{old('f_nacimiento')}}">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{old('telefono')}}">
        </div>
        <div class="form-group">
            <label for="modelo_coche">Modelo de vehículo</label>
            <input type="text" class="form-control" id="modelo_coche" name="modelo_coche" placeholder="Modelo de vehículo" value="{{old('modelo_coche')}}">
        </div>
       
        <label class="form-group">Correo electrónico</label>
        <div class="form-group align-items-center"> 
            <input type="text" class="form-control" id="email" name="email" placeholder="email" placeholder="ejemplo@ejemplo.com">
        </div>

        <button type="submit" class="btn btn-primary mb-5">
            <i class="bi bi-send-check-fill"></i>
        </button>
        
        <a href="{{url('/pasajeros')}}" class="btn btn-secondary mb-5">
            <i class="bi bi-x-lg"></i>
        </a>
    
    </form>
    </div>
@endsection