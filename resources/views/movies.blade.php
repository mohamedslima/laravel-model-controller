<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>
        <div class="container">
            Lista dei Film:
        </div>
    </h1>
    <ul>
        <li>
            <div class="container">
                @foreach ($movies as $movie)
                    <div>
                        <h2>
                            {{ $movie['title'] }}
                        </h2>
                        <p>
                            {{ $movie['vote'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </li>
    </ul>
</body>

</html>
