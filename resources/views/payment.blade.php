@extends('layout')

<html>
 <head>
  <title>Simple Login System in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
    margin-top:50px;
   }
   
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Add Payment</h3><br />

   

   <form method="post" action="/orderpayment/">
    
    {{ csrf_field() }}
    <input type="hidden" name="id" class="btn btn-primary" value="{{$order['id']}}" />

    <div class="form-group">
     <label>Order Id :   </label>
     <text>{{$order['id']}}</text>
     
    </div>
    <div class="form-group">
     <label>Waiter Id :   </label>
     <text>{{$order['waiterId']}}</text>
     
    </div>
    <div class="form-group">
     <label>Item Name :   </label>
     <text>{{$order['item']}}</text>
     
    </div>
    <div class="form-group">
     <label>Quantity :   </label>
     <text>{{$order['quantity']}}</text>
     
    </div>
    <div class="form-group">
     <label>Status :   </label>
     <text>{{$order['status']}}</text>
     
    </div>
    

    <div class="form-group">
     <label>Paid Price </label>
     <input type="number" name="price" class="form-control" value="{{$order['price']}}"/>
    </div>
    
    <div class="form-group">
     <input type="submit" name="order" class="btn btn-primary" value="Add Payment" />
    </div>
    
   </form>
  </div>
 </body>
</html>
