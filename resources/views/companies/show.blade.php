@extends('layouts.app')
@section('title' , 'Muesta Clientes')

@section('content')
    <add-cliente
        :data="{{ $customer }}"
        :onlyshow="'disabled'">
    </add-cliente>
@endsection
