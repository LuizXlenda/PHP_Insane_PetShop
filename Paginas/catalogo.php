<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estylos.css">
    <title>Patas de Prata - Catálogo de Animais</title>
</head>

<body>
<header>
        <div class="container">
        <nav>
            <ul>
                <a href="./index.php"><li>Home</li></a>
                <a href="./cadastro.php"><li>Cadastro</li></a>
                <a href="./catalogo.php"><li>Catálogo de Animais</li>
                <a href="./contato.php"><li>Quem nós somos</li></a>    
            </ul>
        </nav>
        </div>
    </header>
    <br>
    <section class="destaques-container">
        <div class="container">
            <h1>Catálogo de Animais: </h1>
            <?php
            include '../Funcoes/funciones.php'; 
            listaOsAnimals();
            ?>
        </div>
    </section>
    <br><br>


    <footer>
    <small>&copy; Copyright 2025 - Patas de Prata. Todos os direitos reservados.</small>
    </footer>
</body>
</html>