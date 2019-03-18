@extends('layouts.app')
@section('title' , 'Usuarios')

@section('content')
    <form class="form-group" action="/users" method="post">
        @csrf
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <button type="submit" name="button" class="btn btn-primary">Guardar</button>
    </form>
@endsection
