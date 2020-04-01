@extends('layouts.app')
@section('title' , 'Vehiculos')

@section('content')
    <add-cliente
        :data="{{ $customer }}">
    </add-cliente>
@endsection
