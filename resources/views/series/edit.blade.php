<x-layout  title="Editar Serie '{{$series->nome}}'">
  <x-series.form :action="route('series.update', $series->id)" :nome="$series->nome" :id="$series->id"/>
</x-layout>