@extends('layouts.app')
@section('content')
<div class="container">
  <h1>TUTTI I PRODOTTI:</h1>
  @if (Auth::user()->can('edit_product'))
  <form class="form-inline my-4">
    <a class="btn btn-warning" href="{{route ('shoes.create')}}" role="button">Inserisci prodotto</a>
  </form>
  @endif
  <div class="container_card d-flex">
    @forelse($shoes as $shoe)
    <div class="card h-50 mr-2" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$shoe->name}}</h5>
        <h4 class="card-title">{{$shoe->description}}</h4>
        <h4 class="card-title">Price: {{$shoe->price}}£</h4>
      </div>
      <div class="card-action p-3">
        <a class="btn btn-success" href="{{ route('shoes.show',$shoe->id) }}" role="button">Show Info</a>
        @if (Auth::user()->can('edit_product'))
        <a class="btn btn-primary" href="{{ route('shoes.edit',$shoe->id) }}" role="button">Modified</a>
        <form method="post" action="{{route('shoes.destroy',$shoe->id)}}">@method('delete')
          @csrf
          <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        @endif
      </div>
    </div>
    @empty
    <div class="alert alert-danger" role="alert">
      Non ci sono prodotti disponibili!
    </div>
    @endforelse
  </div>
</div>
@endsection
