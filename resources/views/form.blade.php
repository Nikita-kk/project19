<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    .container{width: 400px;margin-top: 100px}
    .btn{position: relative;left: 150px;}
  </style>
</head>
<body>
<div class="container">

    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1" style="font-weight: bold">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          <span class="text-danger">@error('email'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" style="font-weight: bold">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{old('password')}}">
          <span class="text-danger">@error('password'){{$message}} @enderror</span>

        </div>
          <br><hr>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>


</div>
</body>
</html>
