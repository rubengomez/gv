@extends('layouts.app')
@section('title' , 'Motores')

@section('content')

<engines-table 
:data="{{ $engine }}">
</engines-table>
@endsection


