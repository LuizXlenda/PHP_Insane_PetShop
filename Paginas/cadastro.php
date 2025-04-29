<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estylos.css">
    <title>Patas de Prata - Cadastro</title>
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
    <h1>Informe seus dados</h1>
    <section>
        <div class="formulario">
        <form action="cadastro.php" method="GET">
            <center>
            <label for="nome">Nome</label>
            <br>
            <input type="text" placeholder="Digite seu nome" name="nome" id="nome">
            <?php 
                $nome = isset($_GET['nome']) ? $_GET['nome'] : "a";
                $validacao = [];
                if(preg_match("/^[0-9 ]+$/", $nome)){
                    echo "<br>";
                    $validacao[0] = "Nome invalido!";
                    echo $validacao[0];
                }
        
                if(preg_match("/^[ ]+$/", $nome) || strlen($nome) <= 0){
                    echo "<br>";
                    $validacao[0] = "Digite um nome!";
                    echo $validacao[0];
                }
            ?>
            <br>

            <label for="sobrenome">Sobrenome</label>
            <br>
            <input type="text" placeholder="Digite seu sobrenome" name="sobrenome">
            <?php 
                $sobrenome = isset($_GET['sobrenome']) ? $_GET['sobrenome'] : "a";
                $validacao = [];
                if(preg_match("/^[0-9]+$/", $sobrenome)){
                    echo "<br>";
                    $validacao[1] = "Sobrenome inválido!";
                    echo $validacao[1];
                }
                
                if(preg_match("/^[ ]+$/", $sobrenome) || strlen($sobrenome) <= 0){
                    echo "<br>";
                    $validacao[1] = "Digite um sobrenome!";
                    echo $validacao[1];
                }
            ?>
            <br>

            <label for="tel">Telefone</label>
            <br>
            <input type="text" maxlength="15" placeholder="Ex:(xx)xxxxx-xxxx" name="tel">
            <?php 
                $tel = isset($_GET['tel']) ? $_GET['tel'] : "0";
                $validacao = [];
                if(preg_match("/^[a-zA-ZÀ-ú ]+$/", $tel)){
                    echo "<br>";
                    $validacao[3] = "Telefone inválido!";
                    echo $validacao[3];
                }
        
                if(preg_match("/^[ ]+$/", $tel) || strlen($tel) <= 0){
                    echo "<br>";
                    $validacao[3] = "Digite um telefone!";
                    echo $validacao[3];
                }
            ?>
            <br>
            
            <label for="email">E-mail</label>
            <br>
            <input type="text" placeholder="exemplo@tantofaz.com" name="email">
            <?php 
                $email = isset($_GET['email']) ? $_GET['email'] : "exemplo@tantofaz.com";
                $validacao = [];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) > 0){
                    echo "<br>";
                    $validacao[2] = "E-mail inválido!";
                    echo $validacao[2];
                }
        
                if(preg_match("/^[ ]+$/", $email) || strlen($email) <= 0){
                    echo "<br>";
                    $validacao[2] = "Digite um email!";
                    echo $validacao[2];
                }
            ?>
            <br><br>
            <input type="submit" value="Enviar">
            </center>
        </form>
        </div>
    </section>

    <br><br><br><br><br><br><br><br><br>
    <footer>
    <small>&copy; Copyright 2025 - Patas de Prata. Todos os direitos reservados.</small>
    </footer>
</body>
</html>