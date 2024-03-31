<x-layout  title="Nova Serie">
  <form action="{{ route('series.store') }}" method="post">
    @csrf
    <div class="row mb-3">
      <div class="col-8">
        <label for="nome">Nome:</label>
        <input type="text" 
        autofocus
        name="nome" 
        class="form-control" 
        id="nome" 
        value="{{ old('nome')}}"
        >
      </div>
      <div class="col-2">
        <label for="seasonsQty">N° Temporadas:</label>
        <input type="text" 
        name="seasonsQty" 
        class="form-control" 
        id="seasonsQty" 
        value="{{ old('seasonsQty')}}"
        >
      </div>
      <div class="col-2">
        <label for="episodesPerSeason">Eps / Temporada:</label>
        <input type="text" 
        name="episodesPerSeason" 
        class="form-control" 
        id="episodesPerSeason" 
        value="{{ old('episodesPerSeason')}}"
        >
      </div>
    </div>
   
    @isset($id)
      <input type="hidden" name="id" value="{{$id}}">
    @endisset
    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
</x-layout>