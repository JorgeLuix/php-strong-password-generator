<?php 
session_start();
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    echo "<p>La tua password sicura è: $password</p>";
    unset($_SESSION['password']);
}else {
    header('Location: index.php');
    exit;
}
?>