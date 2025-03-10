<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evenement</title>
</head>
<body>
    <div>
        @foreach ($events as $event)
        <div>
            <h1>{{ $event->title }}</h1>
            <p>{{ $event->description }}</p>
            <p>{{ $event->date }}</p>
            <p>{{ $event->location }}</p>
        </div>
        @endforeach
    </div>
</body>
</html>