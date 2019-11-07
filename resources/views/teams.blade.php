<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liverpool</title>
</head>
<body>
    <div class="container">
    <h1>{{ $liverpool['name'] }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Competitie</th>
            </tr>
        </thead>
        @foreach ($liverpool['activeCompetitions'] as $competitie)
            <tbody>
                <tr>
                    <td>{{ $competitie['name'] }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
    <table class="table">
        <thead>
            <tr>
                <th>Naam</td>
                <th>Nummer</th>    
                <th>Position</th>    
            </tr>
        </thead>
        @foreach ($liverpool['squad'] as $players)
            <tbody>
                <tr>
                    <td>{{ $players['name'] }}</td>
                    <td>{{ $players['shirtNumber'] }}</td>
                    <td>{{ $players['position'] }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
    </div>
</body>
</html>