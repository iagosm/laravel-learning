<x-layout title="Séries">
  <a href="{{ route('series.create')}}" class="btn btn-dark mb-3">Adicionar</a>
  <ul class="list-group mt-2">
    @foreach($series as $serie)
    <li class="list-group-item">{{$serie->nome}}</li>
    @endforeach
  </ul>
</x-layout>