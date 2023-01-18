<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <ul>
                @foreach ($trains as $train)
                <h2 class="mt-5">TRENO:</h2>
                <li>{{$train['company']}}</li>   
                <li>{{$train['departure_station']}}</li>   
                <li>{{$train['arrival_station']}}</li>   
                <li>{{$train['departure_time']}}</li>   
                <li>{{$train['arrival_time']}}</li>   
                <li>{{$train['train_code']}}</li>   
                <li>{{$train['carriage']}}</li>

                @if ($train['in_time'] == 0)
                    <li>In orario</li>
                @elseif($train['in_time'] == 1 )
                    <li>In Ritardo</li>   
                @endif  

                @if ($train['cancelled'] == 0)
                    <li>Attivo</li>
                @elseif($train['cancelled'] == 1 )
                    <li>Cancellato</li>   
                @endif 

                 
                @endforeach
            </ul>
        </div>
    </main>

</body>

</html>
