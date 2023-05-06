
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Generatore Password</title>
</head>
<body>
    <?php include 'functions.php'; ?>
    <form method="get">
        <label for="password_length">Lunghezza della password:</label>
        <input type="number" id="password_length" id="password_field" name="password_length" 
        min="8" max="64" required>
        <button type="submit">Generare password</button>
    </form>
    <?php
        session_start();
        if (isset($_GET['password_length'])) {
        $password_length = $_GET['password_length'];
        if (!empty($password_length)) {
            $password = generate_password($password_length);
            $_SESSION['password']= $password;
            header('Location: password.php');
            exit;
        } else {
            echo "<p>Inserire un valore per la lunghezza della password.</p>";
          }
        }
    ?>

    <script> </script>
</body>
</html>