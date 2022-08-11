    <h1>{{$modo}} emplado</h1>

    <label for="nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
    <br>
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApPaterno" value="{{isset($empleado->ApPaterno)?$empleado->ApPaterno:''}}" id="ApellidoPaterno">
    <br>
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApMaterno" value="{{isset($empleado->ApPaterno)?$empleado->ApPaterno:''}}" id="ApellidoMaterno">
    <br>
    <label for="correo">Correo</label>
    <input type="text" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo">
    <br>
    <label for="Foto">Foto</label>
    @if (isset($empleado->Foto))
        <img src="{{ asset('storage'.'/'.$empleado->Foto)}}" width="100" height="100" alt="">
    @endif
    
    <input type="file" name="Foto" value="" id="Foto">
    <br>
    <input type="submit" value="{{$modo}} Datos">

    <a href="{{url('empleado')}}">Regresar</a>

    <br>