<?php
    // Verifica se os parâmetros "nome" e "idade" foram informados na URL.
    // O operador && significa "E": as duas condições precisam ser verdadeiras.
    if (isset($_GET['nome']) && isset($_GET['idade'])) {

        // Obtém o valor do parâmetro "nome" enviado pela URL
        // e armazena esse valor na variável $nome.
        $nome = strtoupper($_GET['nome']);

        // Obtém o valor do parâmetro "idade" enviado pela URL
        // e armazena esse valor na variável $idade.
        $idade = (int) $_GET['idade'];

        $ano_nascimento = date("Y") - $idade;

        // Exibe o texto "Nome: " seguido do nome informado.
        // htmlspecialchars() converte caracteres especiais em entidades HTML,
        // ajudando a prevenir a interpretação de conteúdo malicioso como HTML.
        echo "Nome: " . htmlspecialchars($nome). "<br>";

        // Exibe o texto "Idade: " seguido da idade informada.
        // htmlspecialchars() converte caracteres especiais em entidades HTML,
        // ajudando a prevenir a interpretação de conteúdo malicioso como HTML.
        echo "Idade: " . htmlspecialchars($idade) . "<br>";
        echo "Ano nascimento: ". $ano_nascimento;

    } else {

        // Se pelo menos um dos parâmetros não estiver definido ou tiver valor null,
        // exibe uma mensagem orientando o usuário sobre como informar os dados na URL.
        echo "Use: ?nome=Maria&idade=30";

    }

// Encerra o código PHP.
?>