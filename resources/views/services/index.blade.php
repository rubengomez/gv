@extends('layouts.app')
@section('title' , 'Servicios')

@section('content')
    @foreach ($services as $service)
        <p>{{$service->key}}</p>
        <p>{{$service->name}}</p>
        <a href="/services/{{$service->id}}" class="btn btn-primary">mas</a>
    @endforeach
@endsection
