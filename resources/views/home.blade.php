@extends('layouts.app')
@section('content')


<div id="home">
  <div class="container">
    <h2 class="titolo txt-uppercase">current series</h2>

    <div class="row">
      @foreach ($volumi as $volume)
        <div class="col-lg-2">
          <div class="content">
            <img src="{{$volume['thumb']}}" alt="">
            <p class="txt-uppercase">{{$volume['series']}}</p>
          </div>
        </div>
      @endforeach
    </div>


  </div>































</div>








@endsection
