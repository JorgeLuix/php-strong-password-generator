<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>La tua password sicura</title>
</head>

<body class="bg-primary-subtle">
    <div class="container mb-3 pt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2>La tua password sicura è:</h2>
                <div class="m-3 bg-light rounded-1 p-2">
                    <?php
                    session_start();
                    if (isset($_SESSION['password'])) {
                        $password = $_SESSION['password'];
                        echo $password;
                        unset($_SESSION['password']);
                    } else {
                        header('Location: ./index.php');
                        exit;
                    }
                    ?>
                </div>
                <div class="col-12">
                    <a href="./index.php" class="btn btn-primary">Torna alla homepage</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>