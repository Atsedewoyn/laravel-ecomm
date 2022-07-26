@extends('master')
@section("content")
<div class=" custem-product">   
  <div class="col-sm-10">
    <table class="table">
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>${{$total+10}}</td>
      </tr>      
    </table>
  <div>
    <form action="/orderplace" method="POST">
      @csrf
      <div class="form-group">
         <textarea  name="address" class="form-control" placeholder="enter your address"></textarea>
      </div>
        <div class="form-group">
          <label for="pwd">payment method:</label><br><br>
          <input type="radio" value="cash"  name="payment"><span>  Online payment</span><br><br>
          <input type="radio" value="cash" name="payment"><span>  EMI payment</span><br><br>
          <input type="radio" value="cash" name="payment"><span>  payment on delivery</span><br><br>
       </div>
       <button type="submit" class="btn btn-second">order Now</button>
    </form> 
  </div>
</div>
@endsection
