@extends('layouts.app')
@section('content')
  <div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
  <form method="POST" action="{{route('shoes.store')}}">
    @csrf
    <div class="form-group text-white">
      <label for="name">Name product</label>
      <input type="text" class="form-control" name="name" placeholder="Nike,Adidas,Puma..">
    </div>
    <div class="form-group text-white">
      <label for="description">Description</label>
      <textarea name="description" class="d-block" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group text-white">
      <label for="price">Price (£)</label>
      <input type="text" class="form-control w-25" name="price" placeholder="£">
    </div>
    <button type="submit" class="btn btn-primary">Inserisci</button>
  </form>
</div>
@endsection
