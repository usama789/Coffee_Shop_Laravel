@extends('layout')
<html>
<head>
  <title>Coffee Shop in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:1100px;
    margin:0 auto;
    border:1px solid #ccc;
    margin-top:150px
   }
   .container{
       width: 300px
   }
   .head{
     margin-left:450px;
   }
   .red-alert{
     margin-left: 250px;
     margin-top: 100px;
     Color: red;

   }
  </style>
 </head>
<body class="box">
<h3 class="head">Orders List</h3>
@if(Auth::check())

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Order#</th>
      <th scope="col">WaiterId</th>
      <th scope="col">Item</th>
      <th scope="col">Paid Price</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
      @foreach($members as $member)
    <tr>
      <th scope="row">{{$member['id']}}</th>
      <td>{{$member['waiterId']}}</td>
      <td>{{$member['item']}}</td>
      <td>{{$member['price']}}</td>
      <td>{{$member['status']}}</td>
      @if(Auth::user()->role == 'barista')
      <td><a type="button" class="btn btn-primary btn-sm" href={{"/api/order/status/".$member['id']}}>Status Change</a>
      @endif
      @if(Auth::user()->role == 'cashier')
      <td><a type="button" class="btn btn-primary btn-sm" href={{"orderpayment/".$member['id']}}>Payment</a>
      @endif
      </td>

    </tr>
    @endforeach
  </tbody>
 
</table>
  @else
  <h3 class="red-alert">Please get Login or Register to view the Order list</h3>
  @endif
</body>
</html>