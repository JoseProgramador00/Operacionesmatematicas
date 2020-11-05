@extends('welcome')
@section('contenido')
<form class="form-horizontal" method="POST" action="/dividir">
  <div class="form-group">
    @csrf
    <label class="control-label col-sm-2"   for="numero1">Dijito 1:</label>
    <div class="col-sm-10">
      <input type="number" name="numero1" class="form-control" id="numero1" placeholder="dijito 1">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="numero2">Dijito 2:</label>
    <div class="col-sm-10">
      <input type="number" name="numero2" class="form-control" id="numero2" placeholder="dijito 2">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
    
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Dividir</button>
    </div>
  </div>
</form>
@endsection