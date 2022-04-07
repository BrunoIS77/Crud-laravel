@extends('templates.template')
@section('contents')

<div class="container">
<form action="{{url('Personas/Guardar')}}" method="POST" name="formRegistro">
    @csrf
    <input type="text" name="nombre" required placeholder="Escriba su nombre">
    <input type="email" name="email" required placeholder="Escriba su email">

    <label for="">Ciudades
    <select name="ciudad" id="">
        @foreach ($ciudades as $ciudad)
            <option value="{{ $ciudad->id }}" >{{ $ciudad->nombre }}</option>
        @endforeach
    </select></label>

    <label for="">Distritos
    <select name="distrito" id="">
        @foreach ($distritos as $distrito)
            <option value="{{ $distrito->id }}">{{ $distrito->nombre }}</option>
        @endforeach
    </select></label>
    <br>
    <input type="submit" name="registrar" class="registrar">
    <table border="1px solid black"> 
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>ciudad</th>
            <th>Distrito</th>
        </tr>
        @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->nombre }}</td>
            <td>{{ $persona->email }}</td>
            <td>{{ $persona->relCiudades->nombre }}</td>
            <td>{{ $persona->relDistritos->nombre }}</td>
        </tr>
        
        @endforeach

    </table>
</form>
</div>
@endsection