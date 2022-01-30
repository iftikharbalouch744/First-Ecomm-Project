@extends('master')
@section("content")
<div class="container back">
<h2>My Orders List.. &nbsp;&nbsp;&nbsp;</h2>
<hr/>

     <?php $count=0;?>
     @foreach($orders as $result)
     <?php $count++;?>
   <div class="row">
   <div class="col-sm-3">{{$count}}</div>
   <div class="col-sm-3">
            <img class="list-img" src="{{$result->Gallery}}" >
    </div>
    <div class="col-sm-4">
             <h4>Name: {{$result->Name}}</h4>
             <p>Delivery Status: {{$result->status}}</p>
             <p>Payment Status: {{$result->payment_status}}</p>
             <p>Payment Method: {{$result->payment_methid}}</p>
             <p>Address: {{$result->address}}</p>
    </div>
    <div class="col-sm-2">

    </div>
</div>
<hr/>
@endforeach
</div>

@endsection
