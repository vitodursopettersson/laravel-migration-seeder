@php
    use Carbon\Carbon;
    $dt = Carbon::now();
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
        <h1>Prossimi treni:</h1>
        @foreach ($trains as $train)
            @if (Carbon::parse($train['giorno_di_partenza'])->gt($dt))
                <h1>{{ $train['azienda'] }}</h1>
                <h2>stazione di partenza:{{ $train['stazione_partenza'] }}</h2>
                <h3>stazione di arrivo:{{ $train['stazione_arrivo'] }}</h3>
                <h4>giorno di partenza:{{ $train['giorno_di_partenza'] }}</h4>
                <h5>orario di partenza: {{ $train['orario_partenza'] }}</h5>
                <h5>orario di arrivo:{{ $train['orario_arrivo'] }}</h5>
                <h6>codice treno:{{ $train['codice_treno'] }}</h6>
                <span>carrozze treno:{{ $train['carrozze_treno'] }}</span>
            @endif
        @endforeach
    </div>
</body>

</html>
