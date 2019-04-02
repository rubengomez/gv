@extends('layouts.app')
@section('title' , 'Ejes')

@section('content')
    <axes-table 
        :data="{{ $axes }}">
    </axes-table>
@endsection
