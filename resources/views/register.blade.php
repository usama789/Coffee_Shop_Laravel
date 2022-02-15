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
   <h3 align="center">User Registration</h3><br />

  

   <form method="post" action="/api/register">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Firts Name</label>
     <input type="text" name="fname" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Last Name</label>
     <input type="text" name="lname" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Phone</label>
     <input type="text" name="phone" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="register" class="btn btn-primary" value="Register" />
    </div>
    <div class="form-group">
        <a href="/login">
            Login?
        </a>
    </div>
   </form>
  </div>
 </body>
</html>
