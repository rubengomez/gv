@extends('layouts.app')
@section('title' , 'Vehiculos')

@section('content')

<vehiclesd-table
:data="{{ $vehicle }}">
</vehiclesd-table>

@endsection
