<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    // Formatar dados
    $linha = "Nome: $nome | Email: $email | Telefone: $telefone | Mensagem: $mensagem" . PHP_EOL;

    // Guardar num ficheiro de texto
    file_put_contents("dados.txt", $linha, FILE_APPEND);

    echo "Dados guardados com sucesso!";
}
?>
