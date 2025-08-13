<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Categoria</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/cad.css'>    
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
        <div id="background">
            <?php include './dependencias/navbar.php'; ?>
            <main>
                <div id="container">
                    <h1>Cadastro de Categoria</h1>
                    <form action="" method="post">
                        <div class="agrupamento" style="width: 60%;">
                            <div class="grupo">
                                <label name="lbl_descricao">Descrição:</label>
                                <input type="text" class="editText" name="descricao" placeholder="Digite a descrição da categoria">
                            </div>
                        </div>
                        <div class="agrupamento" style="width: 40%; align-items: center;">
                            <input type="submit" class="botao" value="Cadastrar">
                        </div>
                    </form>
                    <div class="echo">
                    <?php
                        include("../bd/conexao.php");
                        include("../controls/categoria.php");
                        if($_POST){
                            $descricao = $_POST['descricao'];
                            if(inserir_categoria($conexao,$descricao)){
                            echo("Cadastrado com sucesso");
                            }else
                            {
                            $msg = mysqli_error($conexao);
                            echo($msg);
                            }
                        }
                    ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>