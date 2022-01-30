@extends('master')
@section("content")
<div class="container">
   <div class="row">
     <div class="col-sm-6">
     <h2>Searched Items</h2>
     <a href="/">go back</a>
     </div>
    <div class="col-sm-6">

            @foreach($result as $products)
            <a href="details/{{$products['id']}}">
            <img class="trending-img" src="{{$products['Gallery']}}" >
             <h4>{{$products['Name']}}</h4>
             <p>{{$products['Discription']}}</p>
</a>
            @endforeach

    </div>
</div>
@endsection
