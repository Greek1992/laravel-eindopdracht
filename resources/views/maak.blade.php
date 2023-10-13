<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Whatever</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1 style="grid-column: 3 / 5; grid-row: 1 / 2">Maak een entry</h1>
        <form method="POST" action="maak" style="grid-column: 3/5; grid-row: 2/3">
            @csrf
            <label>Geef een titel</label>
            <input name="title1" type="text"/>
            <label>Geef een publisher</label>
            <input name="publisher1" type="text"/>
            <input type="submit" value="Maak" style="background-color: #cbd5e0"/>
        </form>
    </div>
</body>
</html>
