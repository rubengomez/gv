@extends('layouts.app')
@section('title' , 'Roles')

@section('content')
    <axes-table 
        :data="{{ $axes }}">
    </axes-table>
@endsection
