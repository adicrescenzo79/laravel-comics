@extends('layouts.app')
@section('content')


<div id="home">
  <div class="container">
    <h2 class="titolo txt-uppercase">current series</h2>

    <div class="row">
      @foreach ($volumi as $key => $volume)
        <div class="col-lg-2">
          <a href="/">
            <div class="card">
              <div class="cover" style="background-image:url('{{$volume['thumb']}}');">
              </div>
              <p class="txt-uppercase mt-1">{{$volume['series']}}</p>
            </div>
          </a>
        </div>
      @endforeach
    </div>


  </div>



























</div>








@endsection
