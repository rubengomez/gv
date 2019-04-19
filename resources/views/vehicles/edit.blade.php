@extends('layouts.app')
@section('title' , 'Vehiculos')

@section('content')
<editvehicle-form
:data="{{ $vehicle }}">
</editvehicle-form>


@endsection
