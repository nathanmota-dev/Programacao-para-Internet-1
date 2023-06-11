<?php
function mysqlConnect()
{
    $host = "";
    $username = "";
    $password = "";
    $dbname = "";
    $options = [
        PDO::ATTR_EMULATE_PREPARES => false, // desativa a execução emulada de prepared statements
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // ativa o modo de erros para lançar exceções
        PDO::ATTR_PERSISTENT => true, // ativa o uso de conexões persistentes para maior eficiência
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // altera o modo de busca padrão para FETCH_ASSOC
    ];
    try {
        // O objeto $pdo será utilizado nas operações com o BD
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $password, $options);
        //echo "A conexao foi executada corretamente";
        return $pdo;
    } catch (Exception $e) {
        exit('Falha na conexão com o MySQL: ' . $e->getMessage());
    }
}

// Chamada da função para testar a conexão
mysqlConnect();

?>