@extends('layouts.app')
@section('title' , 'Servicios')

@section('content')

<services-table
:data="{{ $services }}">
</services-table>
 
@endsection
