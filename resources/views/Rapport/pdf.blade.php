<!DOCTYPE html>
<html>
<head>
    <title>Rapport {{ $rapport->titre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #195190;
        }
        .contenu {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Rapport: {{ $rapport->titre }}</h1>
    <p>Date: {{ $rapport->date_rapport }}</p>
    <p>Événement Collecte: {{ $rapport->collecteEvenement->titre }}</p>

    <div class="contenu">
        <h3>Contenu du rapport:</h3>
        <p>{{ $rapport->contenu }}</p>
    </div>
</body>
</html><!DOCTYPE html>
<html>
<head>
    <title>Rapport {{ $rapport->titre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #195190;
        }
        .contenu {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Rapport: {{ $rapport->titre }}</h1>
    <p>Date: {{ $rapport->date_rapport }}</p>
    <p>Événement Collecte: {{ $rapport->collecteEvenement->titre }}</p>

    <div class="contenu">
        <h3>Contenu du rapport:</h3>
        <p>{{ $rapport->contenu }}</p>
    </div>
</body>
</html>