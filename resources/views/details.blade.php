@extends('master')
@section("content")
<div class="container">
   <div class="row">
   <h2>Item Detials</h2>
     <div class="col-sm-6">
      <img src="{{$product['Gallery']}}"/>
     </div>
    <div class="col-sm-6">
            <a href="/">go back</a>
            <h4>{{$product['Name']}}</h4>
            <h4>{{$product['Price']}}</h4>
            <h4>{{$product['Category']}}</h4>
            <h4>{{$product['Discription']}}</h4>
        <form action="/add-to-cart" method="POST">
                @csrf
                <input type="hidden" name="productid" value="{{$product['id']}}"/>
                <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br/><br/>
        <button class="btn btn-success">Success</button>
    </div>
    </div>
</div>
@endsection
