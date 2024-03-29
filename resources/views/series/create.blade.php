<x-layout  title="Nova Serie">
  <form action="{{route('series.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
</x-layout>