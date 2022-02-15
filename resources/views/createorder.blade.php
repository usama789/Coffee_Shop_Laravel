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
    margin-top:150px;
   }
   .container{
       width: 300px
   }
   .red-alert{
     margin-left: 350px;
     margin-top: 50px;
     Color: red;

   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">New Order Form</h3><br />

   

  
   @if(Auth::check())

   <form method="post" action="/api/order">
    
    {{ csrf_field() }}
    <div class="form-group">
     <label>Waiter Id</label>
     <input type="string" name="waiterId" class="form-control" />
    </div>
    <div class="form-group">
     <label>Item Name</label>
     <input type="string" name="item" class="form-control" />
    </div>

    <div class="form-group">
     <label>Quantity</label>
     <input type="number" name="quantity" class="form-control" />
    </div>
    
    <div class="form-group">
     <input type="submit" name="order" class="btn btn-primary" value="Place Order" />
    </div>
    
   </form>
   @else
   <h3 class="red-alert">Please get login first to place new order</h3>
   @endif
  </div>
 </body>
</html>
