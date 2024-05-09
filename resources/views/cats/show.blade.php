<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cat->name}}</title>
</head>
<body>
<img src="{{$cat->image_url}}" alt="{{$cat->name}}">    
<h3>{{$cat->name}}</h3>
<p>Age: {{$cat->age}}</p>
<p>Color: {{$cat->color}}</p>
<p>Breed: {{$cat->breed}}</p>
<a href="{{ route('cats.index') }}">Back</a>
</body>
</html>