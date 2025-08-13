<?php
    include("../bd/conexao.php");
    include("../controls/categoria.php");
    $id=$_GET['id'];
    $categoria=buscar_categoria($conexao,$id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Categoria</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='css/alterar.css'> -->
    <script src="../js/bootstrap.js"></script>
</head>
<body>
  <div id="background">
    <?php include './dependencias/navbar.php'; ?>
    <div id="container">
      <div id="container2">
        <div class="titulo">
          <h1>Alterar categorias</h1>
        </div>
        <form action="" method="post">
          <div class="espaco">
            <label name="lbl_id">Código:</label>
            <input type="number" class="editText_id" name="id" value="<?=$categoria['id_categoria']?>" readonly>
          </div>
            <label name="lbl_des">Descrição da categoria:</label>
            <input type="text" class="editText" name="desc" value="<?=$categoria['descricao']?>" placeholder="Digite a descrição da categoria">
              <br>
          <div class="container_botao">
            <input type="submit" class="botao" value="Alterar">
          </div>
        </form>
        <?php
          if($_POST){
            $id=$_POST['id'];
            $desc=$_POST['desc'];
              if(alterar_categoria($conexao,$desc,$id)){
                  echo("Alterado com sucesso");
                  header("Location: categoria_lista.php");
              }else
              {
                  $msg=mysqli_error($conexao);
                  echo ($msg);
              }
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>