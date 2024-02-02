<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
  <div class="container">
    <div class="row">
    @foreach ($movies as $movie)
       <div class="col-md-4">
        <div class="card mb-3">
    <div class="card-header">
        {{ $movie->id }}
    </div>
    <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $movie->title }}</li>
            <li class="list-group-item">{{ $movie->original_title }}</li>
            <li class="list-group-item">{{ $movie->nationality }}</li>
            <li class="list-group-item">{{ $movie->date }}</li>
            <li class="list-group-item">{{ $movie->vote }}</li>
    </ul>
      </div>
    </div>
    @endforeach
  </div>
</div>
</body>
</html>