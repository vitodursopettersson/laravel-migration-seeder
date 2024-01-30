@php
    use Carbon\Carbon;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booltrain</title>
</head>

<body>

    <div class="container">
        @foreach ($trains as $train)
            @if ($train['giorno_di_partenza'] >= Carbon::now())
                <h1>{{ $train['azienda'] }}</h1>
                <h2>{{ $train['azienda'] }}</h2>
                <h2>{{ $train['azienda'] }}</h2>
            @endif
        @endforeach
    </div>
</body>

</html>
