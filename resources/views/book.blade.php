<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Shows</title>
</head>
<body>
    <h1>Anime show</h1>
    <ul>
        @foreach($mangas as $manga)
            <li>{{$manga}}</li>
        @endforeach    
    </ul>
</body>
</html>