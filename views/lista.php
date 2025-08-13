<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/listas.css'>
        <script src="../js/bootstrap.js"></script>
        <title>Lista de editoras</title>
    </head>
    <body>
        <div id="background">
            <?php include './dependencias/navbar.php'; ?>

                <h1>Lista de editoras</h1>
            <?php include("./dependencias/switch_lista.php"); ?>
            <main>
                <table>
                    <tr class="nomes_td">
                        <?php foreach ($colunas as $titulo => $campo): ?>
                        <td> <?= $titulo ?> </td>
                        <?php endforeach; ?>
                        <td class="td_alt">Alterar</td>
                        <td class="td_ex">Excluir</td>
                    </tr>
                        <?php foreach($dados as $linha): ?>
                    <tr class="variaveis">
                        <?php foreach ($colunas as $campo): ?>
                        <td> <?= $linha[$campo] ?> </td>
                        <?php endforeach; ?>
                        

                        <td class="td_alt"><a href="<?=$alterar_link ?>?id=<?=reset($linha) ?>">Alt</a> </td>
                        <td class="td_ex"><a href="<?=$excluir_link ?>?id=<?=reset($linha) ?>">X</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </main>
        </div>
    </body>
</html>