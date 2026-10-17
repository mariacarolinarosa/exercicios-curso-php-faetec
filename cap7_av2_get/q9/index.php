<?php include "dados.php"?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="index.php">Home</a>
    <?php
        foreach ($produtos as $p) { //Procura a categoria de cada produto
            $categoria_nome = "Desconhecida";

            foreach ($categorias as $c) {
                if ($p["categoria_id"] == $c["id"]) {
                    $categoria_nome = $c["nome"];
                }
            }

            //Após encontrar o nome da categoria, exibe as informações do produto

            echo "<p><strong>" . htmlspecialchars($p["nome"]) . "</strong></p>";
            echo "<p> Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
            echo "<p>Categoria: " . htmlspecialchars($categoria_nome) . "</p>";

            echo "<a href='consulta.php?id=" . $p["id"] . "'>Ver mais</a>";

            echo "<hr>";
        }

    ?>
</body>

</html>