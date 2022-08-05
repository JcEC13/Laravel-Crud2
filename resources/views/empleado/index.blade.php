<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->Foto}}</td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApPaterno}}</td>
                <td>{{$empleado->ApMaterno}}</td>
                <td>{{$empleado->correo}}</td>
                <td>Editar|Borrar</td>
            </tr>
        @endforeach
    </tbody>
</table>