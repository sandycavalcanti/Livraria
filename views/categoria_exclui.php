<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>    
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

    <!-- <link rel='stylesheet' type='text/css' media='screen' href='css/excluir.css'> -->
    <script src="../js/bootstrap.js"></script>
    <title>Alterar editora</title>
</head>
<body>
  <div id="background">
      <?php include './dependencias/navbar.php'; ?>
        <div id="container">
            <?php
            try{
                include("../bd/conexao.php");
                include("../controls/categoria.php");
                $id=$_GET['id'];
                if(excluir_categoria($conexao,$id)){
                    header("Location: lista.php?tabela=categoria");
                    die();
                }
            } catch(Exception $erro){
                echo("Este cadastro não pode ser excluído pois está anexado");
            }
            ?>
            <a href="categoria_lista.php" id="href">Voltar</a>
        </div>
  </div>
</body>
</html>
