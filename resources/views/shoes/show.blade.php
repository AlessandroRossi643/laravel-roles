@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-12">
        <div class="card-body">
          <h3 class="card-title">{{$shoe->name}}</h3>
          <p class="card-text">{{$shoe->description}}</p>
          <h3 class="card-title">PRICE: {{$shoe->price}}£</h3>
          <a class="btn btn-dark" href="{{route('shoes.index')}}" role="button">Torna alla home</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
