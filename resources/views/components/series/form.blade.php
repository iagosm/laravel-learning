<form action="{{ $action }}" method="post">
  @csrf
  @if($update)
  @method('PUT')
  @endisset
  <div class="mb-3">
    <label for="nome">Nome:</label>
    <input type="text" 
    name="nome" 
    class="form-control" 
    id="nome" 
    @isset($nome)
    value="{{$nome}}"
    @endisset
    >
  </div>
  @isset($id)
    <input type="hidden" name="id" value="{{$id}}">
  @endisset
  <button type="submit" class="btn btn-primary">Editar</button>
</form>