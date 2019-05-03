@extends('layouts.app')
@section('title' , 'Vehiculos')

@section('content')
<vehicle-table
:data="{{ $vehicle }}">
</vehicle-table>

@endsection
