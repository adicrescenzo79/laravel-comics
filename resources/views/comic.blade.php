@extends('layouts.app')


@section('title')
  {{$volume['series']}}
@endsection

@section('content')





  <div id="comic">

      <div class="blu"></div>

      <section class="trama">
        <div class="container">
          <div class="thumb">
            <img class="" src="{{$volume['thumb']}}" alt="">
            <span class="txt-uppercase">view gallery</span>
          </div>
          <div class="row">
            <div class="col-lg-9">
              <h1 class="txt-uppercase">{{$volume['title']}}</h1>
              <div class="table flex">
                <div class="price-av flex">
                  <div class="price">
                    <span>U.S. Price:</span> <span class="white">{{$volume['price']}}</span>
                  </div>
                  <div class="av txt-uppercase">
                    <span>available</span>
                  </div>
                </div>
                <div class="available txt-capitalize flex">
                  <span class="white">check availability<i class="fas fa-caret-down"></i></span>

                </div>

              </div>
              <p>{{$volume['description']}}</p>
            </div>

            <div class="col-lg-3 rel">
              <span class="abs txt-uppercase advertisement">advertisement</span>
              <img src="/img/super.jpg" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="details">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="content">
                <h2 class="txt-capitalize">talent</h2>
                <div class="flex riga">
                  <span class="title">Art by:</span>
                  <div class="list">
                    @foreach ($volume['artists'] as $key)
                      <span><a href="#">{{$key}}</a></span>
                    @endforeach
                  </div>
                </div>
                <div class="flex riga doppia">
                  <span class="title">Written by:</span>
                  <div class="list">
                    @foreach ($volume['writers'] as $key)
                      <span><a href="#">{{$key}}</a></span>
                    @endforeach

                  </div>

                </div>

              </div>
            </div>

            <div class="col-lg-6">
              <div class="content">
                <h2 class="txt-capitalize">specs</h2>
                <div class="flex riga">
                  <span class="title">Series</span>
                  <span><a class="txt-uppercase">{{$volume['series']}}</a></span>
                </div>
                <div class="flex riga">
                  <span class="title">U.S. Price:</span>
                  <span>{{$volume['price']}}</span>
                </div>
                <div class="flex riga doppia">
                  <span class="title">On Sale Date:</span>
                  <span>{{$volume['sale_date']}}</span>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>































  </div>








@endsection
