<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <h1>Inserisci il paragrafo e la parola da censurare</h1>
    <form action="strings.php" method="GET">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph" rows="10" cols="50" required></textarea><br><br>

      

        <input type="submit" value="Invia">
    </form>
</body>

</html>