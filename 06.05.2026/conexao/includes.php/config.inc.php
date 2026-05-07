<?php
 
$host = "localhost";
$db = "banco1";
$user = "root";
$pass = "";
$charsert = "utf8mb4";
 
// Data Source Name, String de conexão com o banco de dados
$dsn = "mysql:host=$host;dbname=$db;charset=$charsert";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Configura o modo de erro para exceções
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Configura o modo de busca padrão para associativo
    PDO::ATTR_EMULATE_PREPARES => false, // Desativa a emulação de prepared statements
];
 
try {
    $pdo = new PDO($dsn, $user, $pass, $options); // Cria uma nova conexão PDO
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage()); // Exibe mensagem de erro em caso de falha na conexão
}
 
?>