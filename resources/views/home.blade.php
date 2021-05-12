@extends('layouts.app')
@section('content')


<div id="home">
  <div class="container">
    <h2 class="titolo txt-uppercase">current series</h2>

    @foreach ($volumi as $volume)
      <p>{{$volume->title}}</p>
    @endforeach

  </div>































</div>








@endsection
