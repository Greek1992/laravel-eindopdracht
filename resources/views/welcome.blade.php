<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Whatever</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1 style="grid-column: 3 / 4; grid-row: 1 / 2">Whatever</h1>
        <table style="grid-column: 3/4; grid-row: 2/3">
            <?php
            foreach($naamData as $index => $value)
            {
            ?>
            <tr>
                <th style="background-color: steelblue">
                    {{ $idData[$index] }}
                </th>
                <th>
                    {{$naamData[$index]}}
                </th>
                <th>
                    {{$publisherData[$index]}}
                </th>
                <th>
                    <form method="GET" action="edit">
                        @csrf
                        <input type="hidden" name="aidee" value= {{ $idData[$index] }}>
                        <input style="background-color: steelblue" type="submit" value="Wijzig"/>
                    </form>
                </th>
                <th>
                    <form method="GET" action="delete">
                        @csrf
                        <input type="hidden" name="aidee" value={{ $idData[$index] }}>
                        <input style="background-color: steelblue" type="submit" value="Verwijder"/>
                    </form>
                </th>
            </tr>
            <?php
            } ?>
        </table>
        <button style="grid-row: 5/6; grid-column: 4/5" onclick="window.location='{{ url('/maak') }}'">Maak entry</button>
    </div>
</body>
</html>
