@extends('master')
@section("content")
<div class="container">
<table class="table table-striped">
    <thead>

    </thead>
    <tbody>
      <tr>
        <td>Amount </td>
        <td>{{$total}} /-</td>
      </tr>
      <tr>
        <td>Tex</td>
        <td>RS 0 /-</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>RS 100 /-</td>
      </tr>
      <tr>
        <td>Total Payment</td>
        <td>RS {{$total+100}}/-</td>
      </tr>
    </tbody>
  </table>
  <form action="/orderplace" method="POST">
  <div class="form-group">
      @csrf
    <label for="email">Address:</label>
    <TextArea type="text" name="address" class="form-control"></TextArea>
  </div>

  <div class="form-group">
    <input type="radio" name="payment" value="Online"/>&nbsp;&nbsp;&nbsp;<span>Online</span><br/><br/>
    <input type="radio" name="payment" value="EIM"/>&nbsp;&nbsp;&nbsp;<span>EIM</span><br/><br/>
    <input type="radio" name="payment" value="cash on delivery"/>&nbsp;&nbsp;&nbsp;<span>On Delivery </span>
  </div>
  <button type="submit" class="btn btn-success">Submit Order Now</button>
</form>
</div>
@endsection
