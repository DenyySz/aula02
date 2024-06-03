<?php
// coletando dados do formulario
$nome = isset($_POST[ 'nome' ]) ? $_POST[ 'nome'] : 'Ananimo';
$email = isset($_POST['email']) ?? 'Nao informado'; // null coalescing operator
$idade = isset($_POST['email']) ?? "Não informado";

// armazenando dados em um array associativa
$usuario =[
    'nome' => $nome,
    'email' => $email,
    'idade' => $idade,
];

// funçao para saudação 
function saudacao($nome) {
    return "Ola $nome, seja bem-vindo ao nosso sistema";
}

// exibindo uma mensagem de boas-vindas
echo saudacao($usuario['nome']). "<br>";
echo "Aqui estao os detalhes do seu cadastro:<br>";
echo "nome: ". $usuario['nome']. "<br>";
echo "email". $usuario['email']. "<br>";
echo "idade". $usuario['idade']. "<br>";


// Adicionando comentaros explicativos ao codigo
// Este script processa as entradas de um formulario e exibe uma mensagem personalizada.
?>