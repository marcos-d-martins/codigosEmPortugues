<?php

        foreach($todasAsImagensGaleria AS $enviadas):
                $i++;
                $nomeImagemFormatado = "{$image}-gb-{$this->id}-" . substr(md5(time() + $i), 0, 5);
                $mandarImagem = $subirGaleria->formataImagem($enviadas,$nomeImagemFormatado);
                $insereGaleria = new Inserir();
                $insereGaleria->consultaManual("INSERT INTO galerias
                          (nome_imagem,id_publicacao,data_galeria)
                          VALUES({$nomeImagemFormatado},
                                    {$this->dados[$this->id]},
                                    {$this->dados['data_da_publicacao']})");
                var_dump($insereGaleria);
        endforeach;        
?>
