<?php
// Função para sanitizar dados - evitar vulnerabilidades
function sanitize($data)
{
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Função para validar o formato de e-mail
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Função para validar o formato de CPF (exemplo de validação simples)
function validateCPF($cpf)
{
    return preg_match('/^[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}$/', $cpf);
}

// Verifica se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores dos campos do formulário e realiza a sanitização
    $nome = sanitize($_POST['nome']);
    $email = sanitize($_POST['email']);
    $celular = sanitize($_POST['celular']);
    $assunto = sanitize($_POST['assunto']);
    $mensagem = sanitize($_POST['mensagem']);
    $genero = isset($_POST['gender']) ? sanitize($_POST['gender']) : '';

    // Validação dos dados
    if (empty($nome) || empty($email) || empty($celular) || empty($assunto) || empty($mensagem) || empty($genero)) {
        exit('Por favor, preencha todos os campos obrigatórios.');
    }

    if (!validateEmail($email)) {
        exit('O e-mail informado é inválido.');
    }

    // Obtém os interesses selecionados e realiza a sanitização
    $interesses = isset($_POST['interests']) ? $_POST['interests'] : array();
    $interesses = array_map('sanitize', $interesses);

    // Conexão com o banco de dados
    require_once 'conexao.php';
    $pdo = mysqlConnect();

    // Insere os dados no banco de dados
    try {
        $stmt = $pdo->prepare("INSERT INTO pessoa(nome, email, celular, assunto, mensagem, genero, interesses) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $celular, $assunto, $mensagem, $genero, implode(', ', $interesses)]);

        // Redirecionar para a página obrigado.php
        header("Location: obrigado.php");
        exit();
    } catch (Exception $e) {
        // Exibe mensagem de erro
        exit('Erro ao inserir os dados no banco de dados: ' . $e->getMessage());
    }
}

// Se o código chegar até aqui, significa que houve uma requisição inválida
exit('Acesso inválido.');
?>