@extends('master')
@section("content")
<div class="container back">
<h2>Cart List Items &nbsp;&nbsp;&nbsp; <a href="ordernow" class="btn btn-success">Order Now</a></h2>
<hr/>

     <?php $count=0;?>
     @foreach($products as $result)
     <?php $count++;?>
   <div class="row">
   <div class="col-sm-3">{{$count}}</div>
   <div class="col-sm-3">
            <img class="list-img" src="{{$result->Gallery}}" >
    </div>
    <div class="col-sm-4">
             <h4>{{$result->Name}}</h4>
             <p>{{$result->Discription}}</p>
    </div>
    <div class="col-sm-2">
        <a href="/delitem/{{$result->cart_id}}" class="btn btn-danger">Remove to Cart</a>
    </div>
</div>
<hr/>
@endforeach
<a href="ordernow" class="btn btn-success" style="float:right; margin-bottom:10px;">Order Now</a>
</div>

@endsection
