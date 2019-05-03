@extends('layouts.app')
@section('title' , 'Muesta Vehiculos')

@section('content')
<editvehicle-form
    :data="{{ $vehicle }}"
    :onlyshow="'disabled'">
</editvehicle-form>




@endsection
