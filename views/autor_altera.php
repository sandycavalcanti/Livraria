  <?php
      include("../bd/conexao.php");
      include("../controls/autor.php");
      $id=$_GET['id'];
      $autor=buscar_autor($conexao, $id);
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Alterar autor</title>
      <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
      <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
      <!-- <link rel='stylesheet' type='text/css' media='screen' href='css/alterar.css'> -->
</head>
<body>
  <div id="background">
    <?php include './dependencias/navbar.php'; ?>
    <div id="container">
      <div id="container2">
              <div class="titulo">
            <h1>Alterar autores</h1>
        </div>
        <form action="" method="post">
          <div class="espaco">
            <label name="lbl_id">Código:</label>
            <input type="number" class="editText_id" name="id" value="<?=$autor['id_autor']?>" readonly>
          </div>
            <label name="lbl_nome">Nome do autor:</label>
            <input type="text" class="editText" name="nome" value="<?=$autor['nome']?>" placeholder="Digite o nome do autor">
              <br>
          <div class="container_botao">
            <input type="submit" class="botao" value="Alterar">
          </div>
        </form>
        <?php
          if($_POST)
          {
            $id=$_POST['id'];
            $nome=$_POST['nome'];
              if(alterar_autor($conexao, $nome, $id))
              {
                  echo("Alterado Com Sucesso");
                  header("Location: autor_lista.php");
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
