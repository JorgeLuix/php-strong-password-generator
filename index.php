
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
</head>
<body>
    <?php include 'functions.php'; ?>
    <form method="get">
        <label for="password_length">Lunghezza della password:</label>
        <input type="number" id="password_length" name="password_length" 
        min="8" max="64" required>
        <button type="submit">Generare password</button>
    </form>
    <?php
        if (isset($_GET['password_length'])) {
        $password_length = $_GET['password_length'];
        $password = generate_password($password_length);
        echo "<p>La tua password casuale è: $password</p>";
        }
    ?>
</body>
</html>