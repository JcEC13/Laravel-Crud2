    <h1>{{$modo}} emplado</h1>

    @if (count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="Nombre" class="form-control" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">

    </div>

    <div class="form-group">
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApPaterno" class="form-control" value="{{isset($empleado->ApPaterno)?$empleado->ApPaterno:old('ApPaterno')}}" id="ApellidoPaterno">

    </div>

    <div class="form-group">
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApMaterno" class="form-control" value="{{isset($empleado->ApMaterno)?$empleado->ApMaterno:old('ApMaterno')}}" id="ApellidoMaterno">

    </div>

    <div class="form-group">
    <label for="correo">Correo</label>
    <input type="text" name="Correo" class="form-control" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Correo">

    </div>

    <div class="form-group">
    <label for="Foto"></label>
    @if (isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$empleado->Foto)}}" width="100" alt="">
    @endif
    
    <input type="file" name="Foto" class="form-control" value="" id="Foto">
    <br>
    </div>

    <input class="btn btn-success" type="submit" value="{{$modo}} Datos">

    <a class="btn btn-primary" href="{{url('empleado')}}">Regresar</a>

