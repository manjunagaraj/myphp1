<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">


    <?php if(Auth::check()) { ?>

    	<li><a href="">Hi,{{Auth::user()->name}}</a></li>

    	 <li><a href="{{route('logout')}}">Logout</a></li>

<?php } else{ ?>


    
      <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

      <?php } ?>
    </ul>
  </div>
</nav>







<div class="row">
<div class="container">
<div class="col-md-4">
<h3>Shopper Informations</h3>
<form action="/formvalidate" method="post">

<input type="hidden" name="_token" value="{{csrf_token()}}">

<input type="text" name="fullname" class="form-control" placeholder="full-name">
<span style="color: red">{{$errors->first('fullname')}}</span>
<br>

<input type="text" name="pincode" class="form-control" placeholder="pin-code">
<span style="color: red">{{$errors->first('pincode')}}</span>
<br>
<input type="text" name="city" class="form-control" placeholder="city">
<span style="color: red">{{$errors->first('city')}}</span>

<br>
<input type="text" name="state" class="form-control" placeholder="state">
<span style="color: red">{{$errors->first('state')}}</span>

<br>
<input type="text" name="country" class="form-control" placeholder="country">
<span style="color: red">{{$errors->first('country')}}</span>

<br>
<input type="submit" name="" class="btn btn-primary">



  


</form> 
</div><!-- 4 -->
</div><!-- c -->
</div><!-- r -->








  </body>
  </html>