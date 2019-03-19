@extends('layouts.app')
@section('title' , 'Servicios')

@section('content')
    @include('common.success')
    <a href="/services/create" class="btn btn-primary">Crear nuevo servicio</a>
    @foreach ($services as $service)
        <p>{{$service->key}}</p>
        <p>{{$service->name}}</p>
        <a href="/services/{{$service->id}}" class="btn btn-primary">mas</a>
    @endforeach
@endsection
