<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Premier League Stand</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Positie</th>
                    <th scope="col">Team</th>
                    <th scope="col">Gespeeld</th>
                    <th scope="col">Winst</th>
                    <th scope="col">Gelijk</th>
                    <th scope="col">Verlies</th>
                    <th scope="col">Goals Voor</th>
                    <th scope="col">Goals Tegen</th>
                    <th scope="col">Doelsaldo</th>
                    <th scope="col">Punten</th>
                </tr>
            </thead>
            @foreach ($pl as $league)
            <tbody>
            <tr>
                <td>{{ $league['position'] }}</td>
                <td><img src="{{ $league['team']['crestUrl'] }}" alt="profile Pic" height="40" max-width="100%">{{ $league['team']['name'] }}</td>
                <td>{{ $league['playedGames'] }}</td>
                <td>{{ $league['won'] }}</td>
                <td>{{ $league['draw'] }}</td>
                <td>{{ $league['lost'] }}</td>
                <td>{{ $league['goalsFor'] }}</td>
                <td>{{ $league['goalsAgainst'] }}</td>
                <td>{{ $league['goalDifference'] }}</td>
                <td>{{ $league['points'] }}</td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>