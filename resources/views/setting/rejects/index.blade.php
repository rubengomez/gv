@extends('layouts.app')
@section('title' , 'Rechazos')

@section('content')

<rejections-table
:data="{{ $rejects }}">
</rejections-table>

@endsection