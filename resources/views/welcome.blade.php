@extends('layout.app')

@section('content')
@if(Route::currentRouteName() == 'welcome')
    <a href="{{route('filtered')}}">Visualizza i treni in partenza oggi</a>
@else
    <a href="{{route('welcome')}}">Visualizza tutti i treni</a>
@endif
<table class="table">
    <thead class="bg-danger text-white">
    <tr>
        <th>Azienda</th>
        <th>Stazione di partenza</th>
        <th>Stazione di arrivo</th>
        <th>Data di partenza</th>
        <th>Orario di partenza</th>
        <th>Orario di arrivo</th>
        <th>Codice treno</th>
        <th>Numero di carrozza</th>
        <th>in Orario</th>
        <th>Cancellato</th>
    </tr>
</thead>
@foreach ($trains as $train)
    <tr>
            <td>{{$train->azienda}}</td>
            <td>{{$train->stazione_partenza}}</td>
            <td>{{$train->stazione_arrivo}}</td>
            <td>{{$train->data_partenza}}</td>
            <td>{{$train->orario_partenza}}</td>
            <td>{{$train->orario_arrivo}}</td>
            <td>{{$train->codice_treno}}</td>
            <td>{{$train->numero_carrozze}}</td>
            @if($train->in_orario)
            <td>Il treno arriverà in orario</td>
            @else
            <td>il treno potrebbe subire variazioni</td>
            @endif
            @if($train->cancellato)
            <td>Il treno è stato cancellato</td>
            @else
            <td>il treno arriverà all'orario indicato</td>
            @endif
    </tr>
@endforeach
</table>
@endsection