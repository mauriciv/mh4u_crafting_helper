@extends('layout')


@section('content')


<div class="row">

    <div class="col-md-6 col-md-offset-3">
<h1>All Weapons</h1>
        <table class="table">
          <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Creation Cost</th>
            <th>Upgrade Cost</th>
          </tr>
          @foreach ($weapons as $weapon)
          <tr>
            <td style="padding-left:{{ $weapon->tree_depth }}em">{{ $weapon->item->name }}</td>
            <td>{{ $weapon->wtype }}</td>
            <td>{{ $weapon->creation_cost }}</td>
            <td>{{ $weapon->upgrade_cost }}</td>
          </tr>
          @endforeach
        </table>


    </div>


</div>


@stop
