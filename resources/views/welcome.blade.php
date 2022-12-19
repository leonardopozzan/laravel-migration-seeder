@extends('layout.app')

@section('content')
@if(Route::currentRouteName() == 'welcome')
    <div class="my-link"><a href="{{route('filtered')}}">Visualizza i treni in partenza oggi</a></div>
@else
    <div class="my-link"><a href="{{route('welcome')}}">Visualizza tutti i treni</a></div>
@endif
<table class="table text-center">
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
    <tr >
            <td>{{$train->azienda}}</td>
            <td>{{$train->stazione_partenza}}</td>
            <td>{{$train->stazione_arrivo}}</td>
            <td>{{$train->data_partenza}}</td>
            <td>{{substr($train->orario_partenza,0,5)}}</td>
            <td>{{substr($train->orario_arrivo,0,5)}}</td>
            <td>{{$train->codice_treno}}</td>
            <td>{{$train->numero_carrozza}}</td>
            @if($train->in_orario)
            <td>Il treno arriverà in orario</td>
            @else
            <td>Il treno potrebbe subire variazioni</td>
            @endif
            @if($train->cancellato)
            <td>Il treno è stato cancellato</td>
            @else
            <td>Il treno arriverà all'orario indicato</td>
            @endif
    </tr>
@endforeach
</table>
@endsection