@extends('layouts.app')
@section('title' , 'Muesta Vehiculos')

@section('content')
    <add-user
        :data="{{ $user }}"
        :onlyshow="'disabled'">
    </add-user>
@endsection
