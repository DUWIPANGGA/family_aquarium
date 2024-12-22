<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aquarium</title>
</head>
<body>
    <h1>Data Aquarium</h1>
    <ul>
        @foreach($aquariumss as $aquarium)
            <li>{{ $aquarium->name }}</li>
        @endforeach
    </ul>
</body>
</html>