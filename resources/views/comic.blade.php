@extends('layouts.app')


@section('title')
  {{$volume['series']}}
@endsection

@section('content')





  <div id="comic">

      <div class="blu">

      </div>

      <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <h1 class="txt-uppercase">{{$volume['title']}}</h1>
              <div class="table flex">
                <div class="price-av flex">
                  <div class="price">
                    <p>U.S. Price: <span>{{$volume['price']}}</span> </p>
                  </div>
                  <div class="av txt-uppercase">
                    <span>available</span>
                  </div>
                </div>
                <div class="available txt-capitalize flex">
                  <span>check availability</span>
                  <i class="fas fa-caret-down"></i>
                </div>

              </div>
              <p>{{$volume['description']}}</p>
            </div>

            <div class="col-lg-3">
              <img src="/img/super.jpg" alt="">
            </div>
          </div>
      </div>
































  </div>








@endsection
