@extends('layouts.app')
@section('title' , 'Usuarios')

@section('content')
    <users-table
        :data="{{ $clientes }}">
    </users-table>
@endsection
