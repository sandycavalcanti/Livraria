<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de autor</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>    
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/cad.css'>
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
    <div id="background">
        <?php include './dependencias/navbar.php'; ?>
        <main>
            <div id="container">
                <h1>Cadastro de autores</h1>
                <form action="" method="post">
                    <div class="agrupamento" style="width: 60%;">
                        <div class="grupo">
                            <label name="lbl_nome">Nome:</label>
                            <input type="text" class="editText" name="nome" placeholder="Digite o nome do autor">
                        </div>
                        <div class="grupo">
                            <label for="descricao">Descrição:</label>
                            <textarea name="descricao" id="descricao" rows="5" cols="50" placeholder="Escreva aqui um texto grande..."></textarea>
                        </div>
                    </div>
                    <div class="agrupamento" style="width: 40%; align-items: center;">
                        <input type="file" id="imagem" name="imagem" accept="image/*">
                        <label for="imagem" class="upload-label">
                            <img src="https://cdn-icons-png.flaticon.com/512/126/126477.png">
                            Clique ou arraste uma imagem
                        </label>
                        <input type="submit" class="botao" value="Cadastrar">
                    </div>
                </form>
                <div class="echo">
                <?php
                    include("../bd/conexao.php");
                    include("../controls/autor.php");
                    if($_POST)
                    {
                        $nome=$_POST['nome'];
                        if(inserir_autor($conexao,$nome)){
                            echo("Cadastrado com sucesso");
                        }else{
                            $msg=mysqli_error($conexao);
                            echo ($msg);
                        }
                    }
                ?>
                </div>
            </div>
        </main>
    </div>
    </body>
</html>