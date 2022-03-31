@extends('templates.template')

@section('contents')
    <form action="{{url('/Guardar')}}" method="POST" name="formRegistro">
    <input type="text" name="nombre" required placeholder="Escriba su nombre">
    <input type="email" name="email" required placeholder="Escriba su email">
    <select name="ciudades" id="">
        <option value=""></option>
    </select>
    <select name="distritos" id=""></select>
</form>
@endsection