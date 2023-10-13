<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Whatever</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1 style="grid-column: 3/4; grid-row: 0/1">Entries</h1>
        <h2 style="grid-column: 3/6; grid-row: 2/3">Entry is succesvol verwijdert</h2>
        <button style="grid-column: 3/4; grid-row: 3/4" onclick="window.location='{{ url('/') }}'">Terug naar hoofdpagina</button>
    </div>
</body>
</html>
