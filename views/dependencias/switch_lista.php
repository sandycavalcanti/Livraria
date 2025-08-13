<?php
    include("../bd/conexao.php");
    $tabela = $_GET['tabela'] ?? '';
    switch($tabela){
        case 'editora':
            include("../controls/editora.php");
            $dados = listar_editora($conexao);
            $colunas = [
                'ID' => 'id_editora',
                'Descrição' => 'descricao'
            ];
            $alterar_link = 'editora_altera.php';
            $excluir_link = 'editora_exclui.php';
            break;
        case 'livro':
            include("../controls/livro.php");
            $dados = listar_livro($conexao);
            $colunas = [
                'ID' => 'id_livro',
                'Titulo' => 'titulo',
                'Editora' => 'editora',
                'Categoria' => 'categoria',
                'Autor' => 'autor',
                'Quantidade' => 'qtd',
            ];
            $alterar_link = 'livro_altera.php';
            $excluir_link = 'livro_exclui.php';
            break;
        case 'autor':
            include("../controls/autor.php");
            $dados = listar_autor($conexao);
            $colunas = [
                'ID' => 'id_autor',
                'Nome' => 'nome',
            ];
            $alterar_link = 'autor_altera.php';
            $excluir_link = 'autor_exclui.php';
            break;
        case 'categoria':
            include("../controls/categoria.php");
            $dados = listar_categoria($conexao);
            $colunas = [
                'ID' => 'id_categoria',
                'Descrição' => 'descricao',
            ];
            $alterar_link = 'categoria_altera.php';
            $excluir_link = 'categoria_exclui.php';
            break;
        default:
            die("Tabela não encontrada");
    }

?>
