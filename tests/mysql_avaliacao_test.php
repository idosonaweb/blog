<?php

    require_once '../includes/funcoes.php' ;

    require_once '../core/conexao_mysql.php' ;

    require_once '../core/sql.php' ;

    require_once '../core/mysql.php' ;

    insert_teste_avaliacao(5, 'DAORA EM PAE');

    buscar_teste_avaliacao();

    update_teste_avaliacao(45, 3, 'COMMIT');

    buscar_teste_avaliacao();

    function insert_teste_avaliacao ($nota, $comentario) : void 
    {
        $dados = ['nota' => $nota, 'comentario' => $comentario] ;

        insere('avaliacao', $dados);
      
    }

    function buscar_teste_avaliacao () : void 
    {
        $avaliacoes = buscar('avaliacao', [ 'id', 'nota', 'comentario'], [], '') ;

        print_r($avaliacoes);
       
    }

    function update_teste_avaliacao ($id, $nota, $comentario) : void
    {
        $dados = ['nota' => $nota, 'comentario' => $comentario] ;

        $criterio = [['id', '=', $id]] ;
        
        atualiza('avaliacao', $dados, $criterio);
        
    }

?>