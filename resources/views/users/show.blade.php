@extends('layouts.app')
@section('title' , 'Muesta Vehiculos')

@section('content')
    <add-cliente
        :data="{{ $vehicle }}"
        :onlyshow="'disabled'">
    </add-cliente>
@endsection
