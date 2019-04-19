@extends('layouts.app')
@section('title' , 'Muesta Vehiculos')

@section('content')

<showvehicle-form
    :data="{{ $vehicle }}">
</showvehicle-form>




@endsection
