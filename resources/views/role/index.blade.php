@extends('layouts.app')
@section('title' , 'Roles')

@section('content')
    <roles-table
        :data='{{ $roles }}'
    >
</roles-table>
@endsection
