@extends('layouts.app')
@section('title' , 'Servicios')

@section('content')
    @include('common.error')
    <form class="form-group" action="/services" method="post">
        @csrf
        <div class="form-group">
            <label>Clave</label>
            <input type="text" name="key" class="form-control">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" name="button" class="btn btn-primary">Guardar</button>
    </form>
@endsection
