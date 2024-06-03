<?php
$dbhost = 'localhost';
$dbname = 'teste';
$dbuser = 'postgres';
$dbpass = 'brgust123';

$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");

if (!$conn) {
    echo "Erro ao conectar ao banco de dados.";
    exit;
}

$query = "SELECT * FROM users";
$result = pg_query($conn, $query);

if (!$result) {
    echo "Erro ao executar consulta.";
    exit;
}

while ($row = pg_fetch_assoc($result)) {
    echo "Nome: " . $row['username'] . "<br>" . " Senha: " . $row['password'] . "<br>";
}

pg_close($conn);
?>
