@extends('master')
@section("content")
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach ($products as $items)

    <div class="carousel-item {{$items['id']==2? 'active':''}}">
    <a href="details/{{$items['id']}}">
      <img class="img" src="{{$items['Gallery']}}" >
      <div class="carousel-caption backcolor">
        <h3>{{$items['Name']}}</h3>
        <p>{{$items['Discription']}}</p>
      </div> </a>
    </div>

    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div>
    <h2>Trending Items</h2>
@foreach ($products as $items)
<a href="details/{{$items['id']}}">
    <div class="trending-item">
      <img class="trending-img" src="{{$items['Gallery']}}" >
      <div class="">
        <h4>{{$items['Name']}}</h4>
      </div>
    </div>
</a>
    @endforeach
</div>
</div>
@endsection
