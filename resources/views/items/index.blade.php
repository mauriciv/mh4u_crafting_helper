@extends('layout')

@section('content')
    <h1>All Items</h1>

    @foreach ($items as $item)
        <div>
            {{ $item->sub_type }}
            {{ $item->name }}
        </div>
    @endforeach

@stop
