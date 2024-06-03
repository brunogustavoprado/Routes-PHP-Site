<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$dbhost = 'localhost';
$dbname = 'teste';
$dbuser = 'postgres';
$dbpass = 'brgust123';

$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");

if (!$conn) {
    echo "Erro ao conectar ao banco de dados.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $senha = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$senha'";
    $resultado = pg_query($conn, $query);

    if (pg_num_rows($resultado) == 1) {
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $senha;

        header('Location: /dashboard');

    exit; // Importante para evitar que o código HTML abaixo seja executado após o redirecionamento
} else {
    }
}
pg_close($conn);
?>
