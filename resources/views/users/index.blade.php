@extends('layouts.app')
@section('title' , 'Usuarios')

@section('content')
    <users-table
        :data="{{ $users }}">
    </users-table>
@endsection
