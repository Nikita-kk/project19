
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    @if (session()->has('msg'))
       <div class="alert alert-primary">
        {{session()->get('msg')}}
        <a href="" class="close" data-dismiss="alert" aria-label="close">X</a>
       </div>
    @endif

    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
          <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->password}}</td>
            <td><a href="{{route('edit',$d->id)}}"><button class="btn-warning rounded">edit</button></a>
               <a href="{{route('destroy',$d->id)}}"><button class="btn-warning rounded">destroy</button></a></td>
          </tr>
             @endforeach
        </tbody>
      </table>
</body>
</html>
