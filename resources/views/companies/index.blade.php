@extends('layouts.app')
@section('title' , 'Usuarios')

@section('content')
    <companies-table
        :data="{{ $customers }}">
    </companies-table>
@endsection
