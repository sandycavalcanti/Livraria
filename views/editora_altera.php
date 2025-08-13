<?php
    include("../bd/conexao.php");
    include("../controls/editora.php");
    $id=$_GET['id'];
    $editora=buscar_editora($conexao, $id);
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

    <!-- <link rel='stylesheet' type='text/css' media='screen' href='css/alterar.css'> -->
    <script src="../js/bootstrap.js"></script>
    <title>Alterar editora</title>
</head>
<body>
    <div id="background">
        <?php include './dependencias/navbar.php'; ?>
        <div id="container2">
            <div class="titulo">
                <h1>Alterar editora</h1>
            </div>
            <form action="" method="post">

            <div class="espaco">
                <label name="lbl_id">Código:</label>
                <input type="number" class="editText_id" name="id" value="<?=$editora['id_editora']?>" readonly>
            </div>    
                <label name="lbl_des">Descrição da editora:</label>
                <input type="text" class="editText" name="desc" value="<?=$editora['descricao']?>" placeholder="Digite a descrição da editora">
                    <br>
                <div class="container_botao">
                    <input type="submit" class="botao" value="Alterar">
                </div>
            </form>

            <?php
                if($_POST){
                    $id=$_POST['id'];
                    $desc=$_POST['desc'];
                    if(alterar_editora($conexao,$desc, $id)){
                        header("Location: editora_lista.php");
                    }
                    else{
                        $msg=mysqli_error($conexao);
                        echo($msg);
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>