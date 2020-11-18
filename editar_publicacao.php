/*brincando de escrever código*/

<?php
  if(isset($publicacao['editar_publicacao'])):
    unset($publicacao['editar_publicacao']);
    var_dump($publicacao);
    $lerIdAutor = new Ler();
    $lerIdAutor->executarLeitura('publicacao', "WHERE id_autor = :id_autor", "id_autor={$_SESSION['autenticado']['id']}");
    if($lerIdAutor->resultado()):
        $id_autor = $lerIdAutor->pegarConexao()->lastInsertId();
        var_dump($id_autor);
    else:
        echo "DDDeu erro mermão";
    endif;
  endif;
?>
