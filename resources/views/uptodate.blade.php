<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Whatever</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1 style="grid-column: 3 / 4; grid-row: 1 / 2">Entry wijzigen</h1>
        <form method="GET" action="edit1" style="grid-column: 3/4; grid-row: 2/3">
            @csrf
            <input name='aidee1' value="{{ $entry['id'] }}" type="hidden"/>
            <input name="title1" value="{{ $entry['title'] }}" type="text"/>
            <input name="publisher1" value="{{ $entry['publisher'] }}" type="text"/>
            <input type="submit" value="Wijzig" style="background-color: #cbd5e0"/>
        </form>
    </div>
</body>
</html>
