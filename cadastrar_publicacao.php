  ...
    <?php
            $posts = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            // TRATAMENTO DE MÍDIAS.
            if($posts && $posts['publicar']):
                unset($posts['publicar']);
                unset($posts['acao']);
                
                if(isset($posts['imagem']) || isset($posts['arquivo']) || isset($posts['documento'])):
                    $arquivoFoto = new Uploads();
                    $arquivoMultiMidia = new Uploads();
                    $arquivoDocumento = new Uploads();
                    $fotos = $_FILES['imagem'];
                    $multiMidia = $_FILES['multimidia'];
                    $doc = $_FILES['doc'];
                    var_dump($fotos, $multiMidia, $doc);
                
                
                    /*for($i = 0; $i < count($fotos['tmp_name']); $i++):
                        echo $fotos['name'][$i];
                    endfor;*/
                    $arquivoFoto->formataImagem($fotos);
                    $arquivoMultiMidia->formataMidias($arquivo);
                    $arquivoDocumento->formataDocumentos($doc);
                    if(!$arquivoFoto->getResultados()):
                        errosDoUsuarioCustomizados("Erro ao enviar imagem:<small style='color:red;'>{$arquivo->getMsg()}</small>", CORPF_VERMELHO);
                        echo $arquivo->getResultados();
                    else:
                        errosDoUsuarioCustomizados("Imagem enviada! Pasta + arquivo => <b><small style='color:#09f;'>{$arquivo->getResultados()}</small></b>", CORPF_VERDE);
                    endif;
                    if(!$arquivoMultiMidia->getResultados()):
                        errosDoUsuarioCustomizados("Erro ao enviar imagem:<small style='color:red;'>{$arquivoMultiMidia->getMsg()}</small>", CORPF_VERMELHO);
                        echo $arquivoMultiMidia->getResultados();
                    else:
                        errosDoUsuarioCustomizados("Imagem enviada! Pasta + arquivo => <b><small style='color:#09f;'>{$arquivoMultiMidia->getResultados()}</small></b>", CORPF_VERDE);
                    endif;
                    if(!$arquivoDocumento->getResultados()):
                        errosDoUsuarioCustomizados("Erro ao enviar imagem:<small style='color:red;'>{$arquivoDocumento->getMsg()}</small>", CORPF_VERMELHO);
                        echo $arquivoDocumento->getResultados();
                    else:
                        errosDoUsuarioCustomizados("Imagem enviada! Pasta + arquivo => <b><small style='color:#09f;'>{$arquivoDocumento->getResultados()}</small></b>", CORPF_VERDE);
                    endif;

                endif;
          ?>
          
      ...<html>
            ...
        </html>
