<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
</head>
<body>
    <form method="get">
        <label for="password_lenght">Lunghezza della password:</label>
        <input type="number" id="password_lenght" name="password_lenght" 
        min="8" max="32" required>
        <button type="submit">Generare password</button>
    </form>
</body>
</html>