@extends('layouts.app')

@section('title')
  Home
@endsection

@section('content')


<div id="home">
  <div class="container">
    <h2 class="titolo txt-uppercase">current series</h2>

    <div class="row">
      @foreach ($volumi as $key => $volume)
        <div class="col-lg-2">
          <a href="{{route('comic',['id' => $key])}}">
            <div class="card">
              <div class="cover" style="background-image:url('{{$volume['thumb']}}');">
              </div>
              <p class="txt-uppercase mt-1">{{$volume['series']}}</p>
            </div>
          </a>
        </div>
      @endforeach
    </div>

    <div class="load flex">
      <a class="more txt-uppercase" href="#">load more</a>

    </div>


  </div>



























</div>








@endsection
