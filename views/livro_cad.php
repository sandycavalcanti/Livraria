<?php include("../bd/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de livros</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/cad.css'>
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
    <div id="background">
        <?php include './dependencias/navbar.php'; ?>
        <main>
            <div id="container">
                <h1>Cadastro de livros</h1>
                <form action="" method="post">
                    <div class="agrupamento" style="width: 60%;">
                        <div class="grupo">
                            <label for="titulo">Titulo:</label>
                            <input type="text" class="editText" name="titulo" placeholder="Titulo" id="">
                        </div>
                        <div class="grupo">
                            <label name="lbl_autor">Autor:</label>
                            <select class="comboBox" name="autor">
                                <option value="">Selecione</option>
                                <?php
                                include("../controls/autor.php");
                                $autores=listar_autor($conexao);
                                foreach($autores as $a):
                                    echo "<option value=".$a['id_autor'].">".$a['nome'] ."</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="grupo">
                            <label name="lbl_categoria">Categorias:</label>
                            <select class="comboBox" name="categoria">
                                <option value="">Selecione</option>
                                <?php
                                    include("../controls/categoria.php");
                                    $categorias = listar_categoria($conexao);
                                    foreach ($categorias as $c) :
                                    echo "<option value=".$c['id_categoria'].">".$c['descricao'] ."</option>";
                                    endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="grupo">
                            <label name="lbl_editora">Editora:</label>
                            <select class="comboBox" name="editora">
                                <option value="">Selecione</option>
                                <?php
                                include("../controls/editora.php");
                                $editoras=listar_editora($conexao);
                                foreach ($editoras as $e) :
                                    echo"<option value=".$e['id_editora'].">".$e['descricao'] ."</option>";
                                endforeach; 
                                ?>
                            </select>
                        </div>
                        <div class="grupo">
                            <label for="qtd">Quantidade:</label>
                            <input type="number" class="editText" name="qtd" id="" placeholder="Quantidade">
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
                    include("../controls/livro.php");
                    if($_POST)
                    {
                    $editora=$_POST['editora'];
                    $categoria=$_POST['categoria'];
                    $autor=$_POST['autor'];
                    $titulo=$_POST['titulo'];
                    $qtd=$_POST['qtd'];
                        if(inserir_livro($conexao,$editora,$categoria,$autor,$titulo,$qtd))
                        {
                            echo("Cadastrado com sucesso");
                        }else 
                        {
                            $msg=mysqli_error($conexao);
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
