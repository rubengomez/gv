@extends('layouts.app')
@section('title' , 'Pruebas')

@section('content')

<tests-table
:data="{{ $tests }}">
</tests-table>

@endsection