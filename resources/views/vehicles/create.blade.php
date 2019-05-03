@extends('layouts.app')
@section('title' , 'Vehiculos')

@section('content')
    <editvehicle-form
    :cliente="{{ $id }}">
    </editvehicle-form>
@endsection
